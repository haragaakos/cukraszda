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
    const tableBody = document.querySelector("#rateResult");

    // Törli az előző eredményeket
    tableBody.innerHTML = "";

    if (data.error) {
        const row = document.createElement('tr');
        const errorCell = document.createElement('td');
        errorCell.colSpan = 3;
        errorCell.style.textAlign = "center";
        errorCell.textContent = `Hiba: ${data.error}`;
        row.appendChild(errorCell);
        tableBody.appendChild(row);
    } else {
        const row = document.createElement('tr');

        const currencyCell = document.createElement('td');
        currencyCell.textContent = currency;
        currencyCell.style.border = "1px solid #ddd";
        currencyCell.style.padding = "10px";

        const dateCell = document.createElement('td');
        dateCell.textContent = data.date;
        dateCell.style.border = "1px solid #ddd";
        dateCell.style.padding = "10px";

        const rateCell = document.createElement('td');
        rateCell.textContent = data.rate;
        rateCell.style.border = "1px solid #ddd";
        rateCell.style.padding = "10px";

        row.appendChild(currencyCell);
        row.appendChild(dateCell);
        row.appendChild(rateCell);
        tableBody.appendChild(row);
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
                borderColor: 'green',
                backgroundColor: 'lightgreen',
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
    <h1 style="text-align: center; margin-bottom: 30px;">MNB Árfolyamok</h1>

    <section style="margin-bottom: 20px; text-align: center;">
    <form id="queryForm" style="max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div style="margin-bottom: 10px;">
            <label for="currency">Devizapár:</label>
            <select id="currency" name="currency" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="">Válasszon devizapárt</option>
            </select>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="date">Dátum:</label>
            <input type="date" id="date" name="date" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div>
            <button type="button" onclick="fetchRate()" style="padding: 10px 20px; background-color: #34bf49; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
                Lekérdezés
            </button>
        </div>
    </form>
</section>

<div id="result" style="text-align: center; margin-top: 20px;">
    <h2 style="margin-bottom: 20px;">Lekérdezett eredmények</h2>
    <table style="margin: auto; border-collapse: collapse; width: 50%; max-width: 600px; border: 1px solid grey;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;">Devizapár</th>
                <th style="border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;">Dátum</th>
                <th style="border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;">Árfolyam</th>
            </tr>
        </thead>
        <tbody id="rateResult">
            <!-- Dinamikusan generált adatok helye -->
        </tbody>
    </table>
</div>



    <div id="result" style="margin-bottom: 20px;"></div>

    <section style="text-align: center; margin-bottom: 20px;">
    <form id="monthlyForm" style="max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h2 style="margin-bottom: 20px;">Havi árfolyamok</h2>
        <div style="margin-bottom: 10px;">
            <label for="monthlyCurrency">Devizapár:</label>
            <select id="monthlyCurrency" name="currency" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="">Válasszon devizapárt</option>
            </select>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="year">Év:</label>
            <input type="number" id="year" name="year" min="1985" max="2025" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="month">Hónap:</label>
            <input type="number" id="month" name="month" min="1" max="12" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div>
            <button type="button" onclick="fetchMonthlyRates()" style="padding: 10px 20px; background-color: #34bf49; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
                Lekérdezés
            </button>
        </div>
    </form>
</section>


    <div id="monthlyResult" style="margin-top: 20px;">
        <!-- Táblázat és diagram tároló -->
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
            <!-- Táblázat -->
            <div style="flex: 1; min-width: 300px;">
                <table id="rateTable" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid #ddd; padding: 8px;">Dátum</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Árfolyam</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <!-- Diagram -->
            <div style="flex: 1; min-width: 350px;">
                <canvas id="rateChart" width="350" height="200"></canvas>
            </div>
        </div>
    </div>
</body>



</html>

<?php include 'footer.php' ?>
