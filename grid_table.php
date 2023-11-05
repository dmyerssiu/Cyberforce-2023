<?php
$servername = "10.0.141.141";  // IP address of the MySQL server
$username = "root";           // MySQL username
$password = "password";       // MySQL password
$database = "hmi_dh";         // Database name
$table = "grid";              // Table name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the table
$sql = "SELECT grid_id, grid_health, grid_buyback, grid_credits, der_gen FROM $table";
$result = $conn->query($sql);

// Function to fetch and update the table
function updateTable() {
    global $conn, $sql;
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Start the HTML table
        echo "<table border='1'>";
        echo "<tr><th>Grid ID</th><th>Grid Health</th><th>Grid Buyback</th><th>Grid Credits</th><th>DER Generation</th></tr>";

        // Output data from each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["grid_id"] . "</td>";
            echo "<td>" . $row["grid_health"] . "</td>";
            echo "<td>" . $row["grid_buyback"] . "</td>";
            echo "<td>" . $row["grid_credits"] . "</td>";
            echo "<td>" . $row["der_gen"] . "</td>";
            echo "</tr>";
        }

        // Close the HTML table
        echo "</table>";
    } else {
        echo "No data found in the table.";
    }
}

// Initial table load
updateTable();
?>

<!-- JavaScript to refresh the table every 15 seconds -->
<script>
function refreshTable() {
    // Clear the existing table content
    document.querySelector('table').innerHTML = '';

    // Call the PHP function to update the table
    <?php echo "updateTable();" ?>;
}

// Refresh the table every 15 seconds
setInterval(refreshTable, 1500000);
</script>
