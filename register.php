<? include 'header.php' ?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
</head>
<body>
    <h1>Regisztráció</h1>
    <form action='controllers/register_controller.php' method="POST">
        <label>Felhasználónév: <input type="text" name="username" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Jelszó: <input type="password" name="password" required></label><br>
        <button type="submit">Regisztráció véglegesítése</button>
    </form>
</body>
</html>
