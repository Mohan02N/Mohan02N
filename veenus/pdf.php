<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Generator</title>
</head>
<body>
    <h1>PDF Generator</h1>
    <form action="generate_pdf.php" method="post">
        <label for="name">Enter Your Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Generate PDF</button>
    </form>
</body>
</html>
