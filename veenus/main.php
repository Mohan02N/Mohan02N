<html>
    <head>
        <title>Veenus Cable</title>
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

button
{
  height:50;
  width: 15%;
  background-color:green;
  color: white;
  padding: 5px 5px;
  margin: 15px 0;
  border: 5px solid;
  border-radius: 15px;
  cursor: pointer;
  font-size: 20px; 

}

input[type=submit]:hover 
{
  background-color: #00FFFF;
 }
    </style>
      <body>
    <ul>
            <li><a class="active"  href="main.php">Home</a></li>
            <li><a href="process_payment1.php">Payment</a></li>
            <li><a href="logout.php">Logout</a></li>

</ul>

    <img src="seek.png"  style="width:35%;">
        <center>
            <h1> VEENUS CABLE</h1>
            <a href="insert.php"><button><font style="font-family:Constantia;">Insert</font></button></a><br>
            <a href="active.php"><button><font style="font-family:Constantia;">Activation</font></button></a><br>
            <a href="update.php"><button><font style="font-family:Constantia;">Update</font></button></a><br>
            <a href="delete.php"><button><font style="font-family:Constantia;">Delete<font></button></a><br>
            <a href="view.php"><button><font style="font-family:Constantia;">View</font></button></a><br><br>

      
        </center>
    </body>
</html>
