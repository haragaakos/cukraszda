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
    placeholder="Username/Email...">
    <input type="password" name="usersPwd" 
    placeholder="Password...">
    <button type="submit" name="submit">Bejelentkezés</button>
</form>

<?php flash('register') ?>

<form method="post" action="../controllers/Usercontroller.php">
    <input type="hidden" name="type" value="register">
    <input type="text" name="usersName" 
    placeholder="Full name...">
    <input type="text" name="usersEmail" 
    placeholder="Email...">
    <input type="text" name="usersUid" 
    placeholder="Username...">
    <input type="password" name="usersPwd" 
    placeholder="Password...">
    <input type="password" name="pwdRepeat" 
    placeholder="Repeat password">
    <button type="submit" name="submit">Regisztráció</button>
</form>

<?php 
    include('footer.php')
?>