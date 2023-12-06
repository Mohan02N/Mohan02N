<html>
    <head>
        <title>Insert</title>
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
            <li><a class="active"  href="insert.php">Insert</a></li>
            <li><a href="active.php">Activation</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a href="view.php">View</a></li>
 
            <li><a href="delete.php">Delete</a></li>
            <li><a href="logout.php">Logout</a></li>
    
        </ul>
        <center>
            <br>
        <img src="seek.png"  style="width:35%">
        <br><br>
            <h2>INSERT DATA</h2>
            <form method="POST" action="insert1.php">
        <label>Name : </label>
        <input type="text" name="name" required><br>

        <br><label for="STB Box">STB Box</label>
        <input type="text" name="box" required><br>
        
        <br>
        <label for="modify"> Modify : </label>
        <select name="modify" id="modify">
        <option value="select">Select</option>
        <option value="Active">Active</option>
        <option value="Suspend">Suspend</option><br>
</select><br>

        <br>
        <label for="street"> Street : </label>
        <select name="street" id="street">
        <option value="select">Select</option>
        <option value="Devangar street">Devangar street</option>
        <option value="kela street">Kela street</option>
        <option value="vadaku street">vadaku street</option>
        <option value="Plat">Plat</option>
        <option value="Puthu street">Puthu street</option>
        <option value="Main Road">Main Road</option>
        <option value="Kaveri Nagar">Kaveri Nagar</option>
        <option value="Periyar Nagar">Main Road</option>
        <option value="Ammapettai">Ammapettai</option>
</select><br>

        <br>

        <label for="cabel"> Cable : </label>
        <select name="cable" id="cable">
        <option value="select">Select</option>
        <option value="Veenus Cable">Veenus Cable</option>
</select>
<br>
        
        <br><input type="Submit" values="submit">
        <br><br>
        </body>

        <body>

        
        
       
    </center>
    </body>
</html>
