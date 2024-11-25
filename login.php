<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
</head>
<body>
    <h1>Bejelentkezés</h1>
    <form action="controllers/login_controller.php" method="POST">
        <label>Felhasználónév: <input type="text" name="username" required></label><br>
        <label>Jelszó: <input type="password" name="password" required></label><br>
        <button type="submit">Bejelentkezés</button>
    </form>
</body>
</html>
