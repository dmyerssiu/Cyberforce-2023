<?php
            $servername = "10.0.141.141";
            $username = "root";
            $password = "password";
            $database = "sakila"; // Adjust to your database name

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT CONCAT(first_name, ' ', last_name) AS Name, email, create_date, last_update FROM customer WHERE active = 1";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["Name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["create_date"] . "</td>";
                    echo "<td>" . $row["last_update"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "No data found in the table.";
            }

            $conn->close();
            ?>