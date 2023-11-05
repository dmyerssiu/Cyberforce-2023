fetch('grid_script.php')
    .then(response => response.json())
    .then(data => {
        const gridIdData = data.map(row => row.grid_id);
        const gridHealthData = data.map(row => row.grid_health);
        const gridBuybackData = data.map(row => row.grid_buyback);
        const gridCreditsData = data.map(row => row.grid_credits);
        const derGenData = data.map(row => row.der_gen);

        const ctx = document.getElementById('gridChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: gridIdData,
                datasets: [
                    {
                        label: 'Grid Health',
                        data: gridHealthData,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Grid Buyback',
                        data: gridBuybackData,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                   
                    {
                        label: 'DER Generation',
                        data: derGenData,
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
// Initial data load and chart creation
fetchDataAndRefreshChart();

// Refresh the chart every 15 seconds
setInterval(fetchDataAndRefreshChart, 15000);