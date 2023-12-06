<?php
        $servername = "localhost";  // This is the server where MySQL is running
        $username = "root"; // Replace with your MySQL username
        $password = ""; // Replace with your MySQL password
        $dbname = "veenus";     // Replace with the name of your database

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve data from the table
        $sql = "SELECT amount FROM payments";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
           
                echo "" . $row["amount" + "amount"] . "</td>";
               
            }
        } else {
            echo "<tr><td colspan='4'>No data found.</td></tr>";
        }

        // Close the connection
        $conn->close();
        ?>