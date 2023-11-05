<!-- Your HTML content for DER Data, you may add JavaScript for graphs here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>DER8.9 - Part of JakaaGen Inc</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <section id="about">
        <div class="container">
            <h4>DER8.9 is a leading utility company specializing in Distributed Energy Resources (DER). We are dedicated to revolutionizing the energy landscape by harnessing the power of renewable energy and advanced technology.</h4>
    
     <section class="box">
        <h1>DER Data Display</h1>
        <h2>Access real-time data on our distributed energy resources and monitor their performance. Stay informed about energy production, consumption, and savings.</h2>
        
        <script>
        // Function to fetch data from the server and update the graph
        function fetchDataAndUpdateGraph() {
            fetch('dbconnect.php')
                .then(response => response.json())
                .then(data => {
                    // Assuming 'data' is an array of objects with properties you need
                    const ctx = document.getElementById('dataGraph').getContext('2d');
                    const chart = new Chart(ctx, {
                        type: 'line', // or 'bar', 'pie', etc.
                        data: {
                            labels: data.map(item => item.label), // label for each data point
                            datasets: [{
                                label: 'Dataset',
                                data: data.map(item => item.value), // value for each data point
                                // Add other dataset properties
                            }]
                        },
                        options: {
                            // Chart.js options here
                        }
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Initial load
        fetchDataAndUpdateGraph();

        // Set an interval to refresh the graph periodically
        setInterval(fetchDataAndUpdateGraph, 60000); // 60000 ms = 1 minute
    </script>
    </section>
    
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>