<?php
include 'header.php';
require_once 'config/database.php';
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Generátor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px 20px;
            background-color: #34bf49;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2da740;
        }
    </style>
</head>
<body>
    <h2>PDF Generátor</h2>
    <form action="services/pdfgenerator_service.php" method="POST">
        <!-- Süti típus lenyíló lista -->
        <label for="tipus">Válassza ki a sütemény típusát:</label>
        <select id="tipus" name="tipus" required>
            <?php
            $stmt = $pdo->query("SELECT DISTINCT tipus FROM suti");
            while ($row = $stmt->fetch()) {
                echo "<option value='{$row['tipus']}'>{$row['tipus']}</option>";
            }
            ?>
        </select>

        <!-- Mentes tulajdonság lenyíló lista -->
        <label for="mentes">Válassza ki, hogy a sütemény milyen alapanyagtól mentes:</label>
        <select id="mentes" name="mentes" required>
            <?php
            $stmt = $pdo->query("SELECT DISTINCT mentes FROM tartalom");
            while ($row = $stmt->fetch()) {
                echo "<option value='{$row['mentes']}'>{$row['mentes']}</option>";
            }
            ?>
        </select>

        <!-- Egység lenyíló lista -->
        <label for="egyseg">Válassza ki az egységet:</label>
        <select id="egyseg" name="egyseg" required>
            <?php
            $stmt = $pdo->query("SELECT DISTINCT egyseg FROM ar");
            while ($row = $stmt->fetch()) {
                echo "<option value='{$row['egyseg']}'>{$row['egyseg']}</option>";
            }
            ?>
        </select>

        <!-- Küldés gomb -->
        <button type="submit">PDF Létrehozása</button>
    </form>
</body>
</html>

<?php
include 'footer.php';
?>
