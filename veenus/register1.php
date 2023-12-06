<?php
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

// Check if username already exists
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo "Username already exists. Please choose a different username.";
} else {
    // Insert new user into the database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $query)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<html>
    <head>
        <title>Register</title>
        <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
    </head>
    
    <body>
        <br><a href="home.php">Login page</a>
    </body>
</html>
