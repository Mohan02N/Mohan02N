<!DOCTYPE html>
<html>
<head>
    <title>Data Display</title>
    <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
    <style>
        body {
            font-family: Times New Roman;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 0;
        }

        .data-table {
            border-collapse: collapse;
            width: 68%;
            margin: 0 auto;
        }

        .data-table th, .data-table td {
            border: 2px solid #8c8c8c;
            padding: 8px;
            text-align: left;
        }

        .data-table th {
            background-color: #f2f2f2;
        }

        body {
                background-color: #ffffb3;
            } 

            body
{
  margin: 0;
}

ul
 {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a 
{
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active
 {
  background-color: #3366CC;
  color: white;
}

li a:hover:not(.active) 
{
  background-color: #555;
  color: white;
}

input[type=submit]:hover 
{
  background-color: #00FFFF;
 }
    </style>
</head>
<body>
    
    <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="insert.php">Insert</a></li>
            <li><a href="active.php">Activation</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a class="active" href="view.php">View</a></li>
        
            <li><a href="delete.php">Delete</a></li>
            <li><a href="logout.php">Logout</a></li>
    </ul>
    <center>
    
    <br><h1>Display the Data</h1><br>
    <table class="data-table">
        <tr>
            <th>Name</th>
            <th>Box</th>
            <th>Modify</th>
            <th>Street</th>
            <th>Cable</th>
        </tr>
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
        $sql = "SELECT name, box, modify,street, cable FROM cable";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["box"] . "</td>";
                echo "<td>" . $row["modify"] . "</td>";
                echo "<td>" . $row["street"] . "</td>";
                echo "<td>" . $row["cable"] . "</td>";
                echo "</tr>";
                
            }
        } else {
            echo "<tr><td colspan='5'>No data found.</td></tr>";
        }

        // Close the connection
        $conn->close();
        ?>
        </center>
    </table>
  
</body>
</html>