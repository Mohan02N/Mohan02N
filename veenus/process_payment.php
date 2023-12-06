<?php
$amount = $_POST['amount'];
$cardNumber = $_POST['card_number'];
$expiryDate = $_POST['expiry_date'];
$cvv = $_POST['cvv'];

// Validation and security checks go here...

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veenus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO payments (amount, card_number, expiry_date, cvv) VALUES ('$amount', '$cardNumber', '$expiryDate', '$cvv')";

if ($conn->query($sql) === TRUE) {
    echo "Payment processed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<html>
    <head>
        <title>Insert Data</title>
        <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
    </head>
    <body>
    <a href="main.php">Click Here...</a>
    </body>
</html>
