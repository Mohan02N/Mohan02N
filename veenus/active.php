<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activation</title>
    <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
</head>
<style>
    body {
                background-color: #ffffb3;
            } 

            input[type=submit]:hover 
{
  background-color: #00FFFF;
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
<body>

<ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="insert.php">Insert</a></li>
            <li><a class="active" href="active.php">Activation</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a href="view.php">View</a></li>
        
            <li><a href="delete.php">Delete</a></li>
            <li><a href="logout.php">Logout</a></li>
    </ul>

    <br><br><br>
    <center>
    <img src="seek.png"  style="width:35%">
    <h1>Set-Top Box Activation</h1>
    <form action="process_payment1.php" method="post">
        <label for="box_id">Enter Set-Top Box ID:</label>
        <input type="text" id="box_id" name="box_id" required><br><br>

        <label for="action">Select :</label>
        <select id="action" name="action" required>
            <option value="select">Select</option>
            <option value="activate">Activation</option>

        </select><br><br>

        <label for="amount">Amount:</label>
        <select id="amount" name="amount" required>
            <option value>Select</option>
            <option value="200">200</option>
            <option value="250">250</option>
            <option value="300">300</option>
            <!-- Add more options as needed -->
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
        </center>
</body>
</html>
