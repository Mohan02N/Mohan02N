<!DOCTYPE html>
<html>
<head>
    <title>SBI Payment </title>
    <link rel="icon" type="image/x-icon" href="/veenus/sbi.ico">
</head>
<style>

body {
  background-image: url('imag.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

    body {
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 0;
    padding: 20px;
}

h1 {
    color: #333;
}

form {
    display: inline-block;
    text-align: left;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
}

label, input {
    display: block;
    margin-bottom: 10px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

</style>
<body>
    <h1>SBI Payment Gateway</h1>
    <form method="post" action="process_payment.php">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" step="0.01" required>
        <label for="card_number">Card Number:</label>
        <input type="text" name="card_number" id="card_number" required>
        <label for="expiry_date">Expiry Date:</label>
        <input type="text" name="expiry_date" id="expiry_date" required>
        <label for="cvv">CVV:</label>
        <input type="password" name="cvv" id="cvv" required>
        <button type="submit">Make Payment</button>
       
    </form>
    <br><br><a href="main.php"><button type="submit">Home </button></a>
</body>
</html>
