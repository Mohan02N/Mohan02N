<!DOCTYPE html>
<html>
<head>
    <title>Status</title>
    <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
    <style>
        table {
            width: 75%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        .suspend {
            background-color: #F44336;
            color: white;
        }

        
    </style>
</head>
<body>
    <center>
    <h1>Records Table</h1>
    
    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "veenus";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch data
    $sql = "SELECT * FROM cable";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Box No</th><th>Status</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['box'] . "</td>";
            
            // Check status and apply appropriate CSS class
            if ($row['modify'] === 'active') {
                echo "<td class='active'>" . $row['modify'] . "</td>";
            } elseif ($row['modify'] === 'suspend') {
                echo "<td class='suspend'>" . $row['modify'] . "</td>";
            } else {
                echo "<td>" . $row['modify'] . "</td>";
            }
            
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No records found";
    }

    // Close the database connection
    $conn->close();
    ?>
    </center>

    

</body>
</html>
