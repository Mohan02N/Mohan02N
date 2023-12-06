<!DOCTYPE html>
<html>
<head>
    <title>Delete</title>
    <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
</head>
<style>
    img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            }
            body {
                background-color: #ffffb3;
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
            <li><a href="active.php">Activation</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a href="view.php">View</a></li>

            <li><a class="active" href="delete.php">Delete</a></li>
            <li><a href="logout.php">Logout</a></li>
    </ul>
<center>
    <img src="seek.png"  style="width:35%;">    
    <h1>Delete Data</h1>
    <form action="delete1.php" method="post">
     
        <label for="box">Box Number :</label>
        <input type="text" name="box" required><br>
        
        <br>
        <input type="submit" value="Delete">
        <br><br>
             
</center>
    </form>
</body>
</html>
