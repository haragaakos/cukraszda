<? require_once 'auth.php';
requireRole('admin') ?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAP Szolgáltatások</title>
</head>
<body>
    <h1>SOAP Szolgáltatások</h1>
    <select id="table">
        <option value="ar">Ár</option>
        <option value="suti">Süti</option>
        <option value="tartalom">Tartalom</option>
    </select>
    <button onclick="getRecords()">Lekérdezés</button>
    <pre id="result"></pre>

    <script>
        async function getRecords() {
            const table = document.getElementById('table').value;
            const response = await fetch(`controllers/soap_server_controller.php/${table}`);
            const data = await response.json();
            document.getElementById('result').innerText = JSON.stringify(data, null, 2);
        }
    </script>
</body>
</html>
