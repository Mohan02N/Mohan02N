<html>
    <head>
    <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
</head>
</html>
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

// Get data from the form
$name = $_POST['name'];
$box = $_POST['box'];
$modify = $_POST['modify'];
$street = $_POST['street'];
$cable = $_POST['cable'];

// Insert data into the table
$sql = "INSERT INTO cable (name, box, modify, street, cable) 
        VALUES ('$name', '$box', '$modify', '$street', '$cable')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Remember to close the connection when done
$conn->close();
?>


<html>
    <head>
        <title>Insert Data</title>
        <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
    </head>
    <body>
    <a href="insert.php">Click Here...Insert Page...</a>
    </body>
</html>