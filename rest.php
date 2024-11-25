<?php
include 'header.php'; 
?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Süti Kezelés</title>
    <script>
        async function getSutik() {
            const response = await fetch('controllers/suti_api_controller.php');
            const data = await response.json();
            document.getElementById('result').innerText = JSON.stringify(data, null, 2);
        }

        async function createSuti() {
            const nev = document.getElementById('nev').value;
            const tipus = document.getElementById('tipus').value;
            const dijazott = document.getElementById('dijazott').checked ? 1 : 0;
            const response = await fetch('controllers/suti_api_controller.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ nev, tipus, dijazott })
            });
            const data = await response.json();
            alert(data.message);
            getSutik();
        }

        async function updateSuti() {
            const id = document.getElementById('update_id').value;
            const nev = document.getElementById('update_nev').value;
            const tipus = document.getElementById('update_tipus').value;
            const dijazott = document.getElementById('update_dijazott').checked ? 1 : 0;
            const response = await fetch(`../controllers/suti_api_controller.php?id=${id}`, {
                method: 'PUT',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ nev, tipus, dijazott })
            });
            const data = await response.json();
            alert(data.message);
            getSutik();
        }

        async function deleteSuti() {
            const id = document.getElementById('delete_id').value;
            const response = await fetch(`controllers/suti_api_controller.php?id=${id}`, { method: 'DELETE' });
            const data = await response.json();
            alert(data.message);
            getSutik();
        }
    </script>
</head>
<body>
    <h1>Süti Kezelés</h1>

    <h2>Összes Süti Lekérése</h2>
    <button onclick="getSutik()">Lekérdezés/Frissítés</button>
    <pre id="result"></pre>

    <h2>Új Süti Létrehozása</h2>
    <form onsubmit="event.preventDefault(); createSuti();">
        <label>Név: <input type="text" id="nev" required></label><br>
        <label>Típus: <input type="text" id="tipus" required></label><br>
        <label>Díjazott: <input type="checkbox" id="dijazott"></label><br>
        <button type="submit">Létrehozás</button>
    </form>

    <h2>Süti Módosítása</h2>
    <form onsubmit="event.preventDefault(); updateSuti();">
        <label>ID: <input type="text" id="update_id" required></label><br>
        <label>Név: <input type="text" id="update_nev" required></label><br>
        <label>Típus: <input type="text" id="update_tipus" required></label><br>
        <label>Díjazott: <input type="checkbox" id="update_dijazott"></label><br>
        <button type="submit">Módosítás</button>
    </form>

    <h2>Süti Törlése</h2>
    <form onsubmit="event.preventDefault(); deleteSuti();">
        <label>ID: <input type="text" id="delete_id" required></label><br>
        <button type="submit">Törlés</button>
    </form>
</body>
</html>

<?php
include 'footer.php'; 
?>


