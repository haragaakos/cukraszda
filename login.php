<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
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

        form input[type="text"], form input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
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
            text-align: center;
        }

        button:hover {
            background-color: #2da740;
        }
    </style>
</head>
<body>
    <h1>Bejelentkezés</h1>
    <form action="controllers/login_controller.php" method="POST">
        <label>Felhasználónév:</label>
        <input type="text" name="username" required>
        <label>Jelszó:</label>
        <input type="password" name="password" required>
        <button type="submit">Bejelentkezés</button>
    </form>
</body>
</html>

<?php include 'footer.php'; ?>
