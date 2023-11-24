<?php

    require_once '../models/Usermodel.php';
    require_once 'Sessionhelper.php';

    class Users {

        private $userModel;
        
        public function __construct(){
            $this->userModel = new User;
        }

        public function register(){
            
            //Post data szanitálás
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Adat inicializálása
            $data = [
                'usersName' => trim($_POST['usersName']),
                'usersEmail' => trim($_POST['usersEmail']),
                'usersUid' => trim($_POST['usersUid']),
                'usersPwd' => trim($_POST['usersPwd']),
                'pwdRepeat' => trim($_POST['pwdRepeat'])
            ];

            //Inputok validálása
            if(empty($data['usersName']) || empty($data['usersEmail']) || empty($data['usersUid']) || 
            empty($data['usersPwd']) || empty($data['pwdRepeat'])){
                flash("register", "Kérem töltse ki az összes mezőt!");
                redirect("../views/login.php");
            }

            if(!preg_match("/^[a-zA-Z0-9]*$/", $data['usersUid'])){
                flash("register", "Érvénytelen felhasználónév!");
                redirect("../views/login.php");
            }

            if(!filter_var($data['usersEmail'], FILTER_VALIDATE_EMAIL)){
                flash("register", "Érvénytelen Email cím!");
                redirect("../views/login.php");
            }

            if(strlen($data['usersPwd']) < 6){
                flash("register", "Hibás jelszó");
                redirect("../views/login.php");
            } else if($data['usersPwd'] !== $data['pwdRepeat']){
                flash("register", "A jelszavak nem egyeznek!");
                redirect("../views/login.php");
            }

            // Felhasználónév vagy jelszó már létezik

            if($this->userModel->findUserByEmailOrUsername($data['usersEmail'], $data['usersName'])){
                flash("register", "A felhasználónév, vagy jelszó már foglalt!");
                redirect("../index.php");
            }

            //Jelszó hash-elése
            $data['usersPwd'] = password_hash($data['usersPwd'], PASSWORD_DEFAULT);

            //Felhasználó regisztrálása
            if($this->userModel->register($data)){
                redirect("../views/login.php");
            }else{
                die("Valami rosszul sikerült");
            }
        }

    public function login(){
        //Post Data szanitálása
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data=[
            'name/email' => trim($_POST['name/email']),
            'usersPwd' => trim($_POST['usersPwd'])
        ];

        if(empty($data['name/email']) || empty($data['usersPwd'])){
            flash("login", "Please fill out all inputs");
            header("../views/login.php");
            exit();
        }

        //Felhasználó és email keresése
        if($this->userModel->findUserByEmailOrUsername($data['name/email'], $data['name/email'])){
            //Felhasználót megtaláltuk
            $loggedInUser = $this->userModel->login($data['name/email'], $data['usersPwd']);
            if($loggedInUser){
                //Session létrehozása
                $this->createUserSession($loggedInUser);
            }else{
                flash("login", "Érvénytelen jelszó");
                redirect("../views/login.php");
            }
        }else{
            flash("login", "Érvénytelen felhasználó");
            redirect("../views/login.php");
        }
    }

    public function createUserSession($user){
        $_SESSION['usersId'] = $user->usersId;
        $_SESSION['usersName'] = $user->usersName;
        $_SESSION['usersEmail'] = $user->usersEmail;
        redirect("../views/login.php");
    }

    public function logout(){
        unset($_SESSION['usersId']);
        unset($_SESSION['usersName']);
        unset($_SESSION['usersEmail']);
        session_destroy();
        redirect("../views/login.php");
    }
}

    $init = new Users;

    //Megbizonyosodás, hogy a felhasználó POST requestet használt
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'register':
                $init->register();
                break;
            case 'login':
                $init->login();
                break;
            default:
            redirect("../views/login.php");
        }
        
    }else{
        switch($_GET['q']){
            case 'logout':
                $init->logout();
                break;
            default:
            redirect("../views/login.php");
        }
    }

    