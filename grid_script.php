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

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the connection
$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
