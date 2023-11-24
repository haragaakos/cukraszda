<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href=login.css>
<body>
	<?php
	include("header.php");
    include("../controllers/Sessionhelper.php")
    ?>
<?php flash('login') ?>

<form method="post" action="../controllers/Usercontroller.php">
<input type="hidden" name="type" value="login">
    <input type="text" name="name/email"  
    placeholder="Felhasználónév/E-mail...">
    <input type="password" name="usersPwd" 
    placeholder="Jelszó...">
    <button type="submit" name="submit">Bejelentkezés</button>
</form>

<?php flash('register') ?>

<form method="post" action="../controllers/Usercontroller.php">
    <input type="hidden" name="type" value="register">
    <input type="text" name="usersName" 
    placeholder="Teljes név...">
    <input type="text" name="usersEmail" 
    placeholder="E-mail...">
    <input type="text" name="usersUid" 
    placeholder="Felhasználónév...">
    <input type="password" name="usersPwd" 
    placeholder="Jelszó...">
    <input type="password" name="pwdRepeat" 
    placeholder="Jelszó ismétlése">
    <button type="submit" name="submit">Regisztráció</button>
</form>

<?php 
    include('footer.php')
?>