<?php 
    session_start(); 
?>
<link rel="stylesheet" href="header.css">
<header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
            <h1 class="logoName">Sweet Cake </h1>
        </div>

        <nav class="navbar">
            <a id="index-text">Üdvözöllek, <?php if(isset($_SESSION['usersId'])){
            echo explode(" ", $_SESSION['usersName'])[0];
            }else{
            echo 'Vendég';
            } 
            ?> </a>
            <a href="../index.php">Kezdőoldal</a>
            <a href="#product">Termékek</a>
            <a href="rating.php">Vélemények</a>
            <a href="#contact">Kapcsolat</a>
            <?php if(!isset($_SESSION['usersId'])) : ?>
                <a href="login.php">Bejelentkezés/Regisztráció</a>
            <?php else: ?>
                <a href="../controllers/Usercontroller.php?q=logout"><Logout</a>
            <?php endif; ?>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>

        <div class="search">
            <input type="search" placeholder="search...">
        </div>
    </header>
 




