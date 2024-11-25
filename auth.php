<?php
session_start();

// Ellenőrzi, hogy a felhasználó be van-e jelentkezve
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Ellenőrzi, hogy az adott szerepkörrel rendelkezik-e a felhasználó
function hasRole($role) {
    return isset($_SESSION['role']) && $_SESSION['role'] === $role;
}

// Jogosultság ellenőrzése
function requireRole($requiredRole) {
    if (!isLoggedIn() || !hasRole($requiredRole)) {
        header('Location: login.php');
        exit;
    }
}

// Vendég felhasználó ellenőrzése
function isVisitor() {
    return !isLoggedIn();
}
?>
