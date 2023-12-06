<?php
session_start();

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veenus";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password match
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header("Location: main.php");
} else {
    echo "Invalid username or password.";
}

mysqli_close($conn);
?>
<hmtl>
    <head>
        <title>Login</title>
        <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
    </head>
    <body>
        <br><a href="home.php">Click Here...Login Page...</a>
        <img src="oops.png">
</html>