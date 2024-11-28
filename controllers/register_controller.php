<?php
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Ellenőrizzük, hogy van-e már ilyen felhasználó
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$username, $email]);
    if ($stmt->rowCount() > 0) {
        die("Felhasználónév vagy email már létezik!");
    }

    //Jelszó titkosítás és mentés
    $hashedPassword = hash('sha256', $password);
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, 'user')");
    $stmt->execute([$username, $email, $hashedPassword]);

    echo "Sikeres regisztráció!";
}
?>
