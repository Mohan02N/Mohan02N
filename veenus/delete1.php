<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veenus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $box = $_POST["box"];

    $sql = "DELETE FROM cable WHERE box = '$box'";
    if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully.";
    } else {
        echo "Error deleting data: " . $conn->error;
    }
}

$conn->close();
?>

<html>
    <head>
        <title>Delete</title>
        <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
    </head>
    <body>
    <a href="delete.php">Click Here...Delete Page...</a>
    </body>
</html>