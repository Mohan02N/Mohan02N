<!DOCTYPE html>
<html>
<head>
    <title>Payment Options</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>

body {
  background-image: url('pay.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
    .radio-image {
    display: inline-block;
    margin: 10px;
    cursor: pointer;
}

.color-image {
    width: 250px;
    height: 100px;
    border: 2px solid transparent;
    transition: border-color 0.3s ease-in-out;
}

input[type="radio"]:checked + .color-image {
    border-color: #007bff;
}
</style>
<body>
    <center>
    <form action="submit.php" method="post">
        <h2>Select Payment Option:</h2>
        <label>
            <input type="radio" name="payment_option" value="debit_card">Debit Card<br>
            <img src="debit.jpg" alt="Blue" class="color-image">
        </label>
        <label>
        <br><input type="radio" name="payment_option" value="credit_card">Credit Card<br>
            <img src="credit.jpg" alt="Blue" class="color-image"><br><br>
        </label>
        <label>
            <input type="radio" name="payment_option" value="upi"> UPI<br>
            <img src="upi.png" alt="Blue" class="color-image"><br><br>
        </label>
        <label>
            <input type="radio" name="payment_option" value="internet_banking"> Internet Banking<br>
            <img src="inter.jpg" alt="Blue" class="color-image"><br><br>
        </label>
        <button type="submit">Submit</button>
    </form>
</center>
</body>
</html>
