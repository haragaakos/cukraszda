<?php
require_once 'config/database.php';
require_once 'auth.php';

//Menüelemek lekérdezése az adatbázisunkból
function fetchMenuItems($pdo, $parent_id = NULL) {
    $stmt = $pdo->prepare("SELECT * FROM menu WHERE (parent_id = ? OR (parent_id IS NULL AND ? IS NULL)) AND is_active = 1 ORDER BY id");
    $stmt->execute([$parent_id, $parent_id]);
    return $stmt->fetchAll();
}

//Menü generálása az adatbázisból 
function generateMenuHTML($pdo, $parent_id = NULL) {
    $menuItems = fetchMenuItems($pdo, $parent_id);

    if (!$menuItems) {
        return ''; //Ha nincsenek menüpontok, akkor egy üres stringet ad vissza
    }

    $html = '<ul>';
    foreach ($menuItems as $menuItem) {
        $hasChildren = !empty(fetchMenuItems($pdo, $menuItem['id'])); //Ellenőrizzük, hogy létezik-e gyermek elem

        if ($hasChildren) {
            $html .= '<li class="dropdown">';
            $html .= '<a href="#"><span>' . htmlspecialchars($menuItem['name']) . '</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>';
            $html .= generateMenuHTML($pdo, $menuItem['id']); //Gyermek elemek generálása
        } else {
            $html .= '<li>';
            $html .= '<a href="' . htmlspecialchars($menuItem['link'] ?? '#') . '">' . htmlspecialchars($menuItem['name']) . '</a>';
        }
        $html .= '</li>';
    }
    $html .= '</ul>';

    return $html;
}
?>
