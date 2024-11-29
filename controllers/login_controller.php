<?php
require_once '../config/database.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Jelszó és felhasználónév ellenőrzése
    $hashedPassword = hash('sha256', $password);
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->execute([$username, $hashedPassword]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        header('Location: ../index.php');
        //echo "Sikeres bejelentkezés!";
    } else {
        echo "Hibás felhasználónév vagy jelszó!";
    }
}
?>
