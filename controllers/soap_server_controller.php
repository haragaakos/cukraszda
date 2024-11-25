<?php
header("Content-Type: application/json");
require_once '../config/database.php'; 

//Az API metódus feldolgozása
$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

//Az endpoint és az ID értékének feldolgozása
$endpoint = explode('/', trim($_SERVER['PATH_INFO'] ?? '', '/'));
$resource = $endpoint[0] ?? null; // ar, suti, tartalom
$id = $endpoint[1] ?? null;

switch ($resource) {
    case 'ar':
    case 'suti':
    case 'tartalom':
        handleResource($resource, $id, $method, $input);
        break;
    default:
        http_response_code(404);
        echo json_encode(['error' => 'Resource not found']);
}

function handleResource($table, $id, $method, $input) {
    global $pdo;

    switch ($method) {
        case 'GET':
            if ($id) {
                //Egy rekord lekérése
                $stmt = $pdo->prepare("SELECT * FROM $table WHERE id = ?");
                $stmt->execute([$id]);
                $result = $stmt->fetch();
                echo json_encode($result);
            } else {
                //Különben összes rekord lekérése
                $stmt = $pdo->query("SELECT * FROM $table");
                $result = $stmt->fetchAll();
                echo json_encode($result);
            }
            break;

        case 'POST':
            //Új rekord létrehozása
            $columns = implode(", ", array_keys($input));
            $placeholders = implode(", ", array_fill(0, count($input), "?"));
            $stmt = $pdo->prepare("INSERT INTO $table ($columns) VALUES ($placeholders)");
            $stmt->execute(array_values($input));
            echo json_encode(['message' => "$table sikeresen létrehozva!"]);
            break;

        case 'PUT':
            if (!$id) {
                http_response_code(400);
                echo json_encode(['error' => 'ID szükséges a frissítéshez']);
                break;
            }
            //Rekord módosítása
            $columns = array_map(fn($key) => "$key = ?", array_keys($input));
            $columns = implode(", ", $columns);
            $stmt = $pdo->prepare("UPDATE $table SET $columns WHERE id = ?");
            $stmt->execute([...array_values($input), $id]);
            echo json_encode(['message' => "$table sikeresen frissítve!"]);
            break;

        case 'DELETE':
            if (!$id) {
                http_response_code(400);
                echo json_encode(['error' => 'ID szükséges a törléshez']);
                break;
            }
            //Rekord törlése
            $stmt = $pdo->prepare("DELETE FROM $table WHERE id = ?");
            $stmt->execute([$id]);
            echo json_encode(['message' => "$table sikeresen törölve!"]);
            break;

        default:
            http_response_code(405);
            echo json_encode(['error' => 'Metódus nem támogatott']);
    }
}
?>
