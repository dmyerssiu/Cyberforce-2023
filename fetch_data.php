<?php

require 'dbconnect.php';

$data = [];

foreach ($db_credentials as $key => $creds) {
    $conn = new mysqli($creds['host'], $creds['user'], $creds['password'], $creds['dbname']);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT dataintegrity, t_stamp FROM sqlt_data_1_2023_11");

    $data[$key] = [];
    while ($row = $result->fetch_assoc()) {
        $data[$key][] = $row;
    }

    $conn->close();
}

echo json_encode($data);

?>