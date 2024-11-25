<?php include 'header.php' ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNB Árfolyamok</title>
    <script>
        //Devizapárok betöltése
        async function loadCurrencyPairs() {
            const response = await fetch('services/soap_mnb_backend_service.php?action=getCurrencyPairs');
            const data = await response.json();

            if (data.error) {
                alert(`Hiba: ${data.error}`);
                return;
            }

            //Select mezők frissítése
            const currencySelects = [document.getElementById('currency'), document.getElementById('monthlyCurrency')];
            currencySelects.forEach(select => {
                select.innerHTML = '<option value="">Válasszon devizapárt</option>';
                data.pairs.forEach(pair => {
                    const option = document.createElement('option');
                    option.value = pair;
                    option.textContent = pair;
                    select.appendChild(option);
                });
            });
        }


        //Árfolyam lekérdezése
        async function fetchRate() {
            const currency = document.getElementById('currency').value;
            const date = document.getElementById('date').value;

            if (!currency || !date) {
                alert("Kérjük, válasszon devizapárt és dátumot.");
                return;
            }

            const response = await fetch('services/soap_mnb_backend_service.php?action=getRate', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({ currency, date })
            });

            const data = await response.json();
            const resultDiv = document.getElementById('result');

            if (data.error) {
                resultDiv.innerHTML = `<strong>Hiba:</strong> ${data.error}`;
            } else {
                resultDiv.innerHTML = `
                    <strong>Devizapár:</strong> ${currency}<br>
                    <strong>Dátum:</strong> ${data.date}<br>
                    <strong>Árfolyam:</strong> ${data.rate}
                `;
            }
        }
let chartInstance = null; //Globális változó létrehozása a diagramhoz

async function fetchMonthlyRates() {
    const currency = document.getElementById('monthlyCurrency').value;
    const year = document.getElementById('year').value;
    const month = document.getElementById('month').value;

    if (!currency || !year || !month) {
        alert("Kérjük, töltse ki az összes mezőt!");
        return;
    }

    const response = await fetch('services/soap_mnb_backend_service.php?action=getMonthlyRates', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ currency, year, month })
    });

    const data = await response.json();
    const tableBody = document.querySelector("#rateTable tbody");
    const chartCanvas = document.getElementById("rateChart").getContext("2d");

    tableBody.innerHTML = "";

    if (data.error) {
        alert(`Hiba: ${data.error}`);
        return;
    }

    const labels = [];
    const rates = [];

    data.forEach(item => {
        const row = document.createElement("tr");
        const dateCell = document.createElement("td");
        const rateCell = document.createElement("td");

        dateCell.textContent = item.date;
        rateCell.textContent = item.rate !== null ? item.rate : "N/A";

        row.appendChild(dateCell);
        row.appendChild(rateCell);
        tableBody.appendChild(row);

        if (item.rate !== null) {
            labels.push(item.date);
            rates.push(parseFloat(item.rate));
        }
    });

    //Előző diagram megsemmisítése
    if (chartInstance) {
        chartInstance.destroy();
    }

    //Új diagram létrehozása
    chartInstance = new Chart(chartCanvas, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: `${currency} árfolyam`,
                data: rates,
                borderColor: 'blue',
                backgroundColor: 'lightblue',
                fill: false
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    type: 'category',
                    title: { display: true, text: 'Dátum' }
                },
                y: {
                    beginAtZero: false,
                    title: { display: true, text: 'Árfolyam' }
                }
            }
        }
    });
}



        //Devizapárok betöltése az oldalunk betöltésekor
        window.onload = loadCurrencyPairs;
    </script>
</head>
<body>
    <h1>MNB Árfolyamok</h1>
    <form id="queryForm">
        <label for="currency">Devizapár:</label>
        <select id="currency" name="currency" required>
            <option value="">Válasszon devizapárt</option>
        </select>
        <br>
        <label for="date">Dátum:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <button type="button" onclick="fetchRate()">Keresés</button>
    </form>
    <div id="result"></div>
    <form id="monthlyForm">
    <h2>Havi árfolyamok</h2>
    <label for="monthlyCurrency">Devizapár:</label>
    <select id="monthlyCurrency" name="currency" required>
        <option value="">Válasszon devizapárt</option>
    </select>
    <br>
    <label for="year">Év:</label>
    <input type="number" id="year" name="year" min="2000" max="2100" required>
    <br>
    <label for="month">Hónap:</label>
    <input type="number" id="month" name="month" min="1" max="12" required>
    <br>
    <button type="button" onclick="fetchMonthlyRates()">Lekérdezés</button>
</form>
<div id="monthlyResult">
    <table id="rateTable">
        <thead>
            <tr>
                <th>Dátum</th>
                <th>Árfolyam</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <canvas id="rateChart" width="400" height="200"></canvas>
</div>

</body>
</html>

<?php include 'footer.php' ?>
