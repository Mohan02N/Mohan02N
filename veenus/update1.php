<html>
    <head>
    <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
</head>
</html>
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
    $newName = $_POST["name"];
    $newModify = $_POST["modify"];
    $newStreet = $_POST["street"];
    $newCable = $_POST["cable"];

    $sql = "UPDATE cable SET name = '$newName', modify = '$newModify',street = '$newStreet', cable = '$newCable' WHERE box = '$box'";
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully.";
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

$conn->close();
?>

<hmtl>
    <head>
        <title>Update</title>
        <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
        <a href="update.php">Click Here...Update Page...</a>
    </head>
</html>