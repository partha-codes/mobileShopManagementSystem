<html>
<!DOCTYPE html>
<head>
	<title>New Stock</title>
  <link rel="stylesheet" href="new_stock.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<nav>
      <ul>
        <li style="font-size:15px;float:left;"><a href="index.html">Home</a></li> 
        <li style="font-size:15px;"><a href="request_display.php">Requests</a></li>
        <li style="font-size:15px;"><a href="cm_details.php">Customers</a></li>
        <li style="font-size:15px;"><a href="update_stock.php">Update</a></li>
        <li style="font-size:15px;"><a href="sales.php">Sales</a></li>     
        <li style="font-size:15px;"><a href="register_cm.php">New Customer</a></li>       
        <li style="font-size:15px;"><a href="new_reqest.php">New Request</a></li>  
        <li style="font-size:15px;"><a href="new_stock.php">New Stock</a></li>
    </ul>
</nav>
	<div class="new_stock">
	  <div class="form">
<form class="login-form" name="form1" method="post">
  <input name="number" type="text" id="myusername" placeholder="Amount">

  <input name="name" type="text" id="myusername" placeholder="Name" ><br>
  <br>
  <button type="submit" name="submit">save</button>
</form>
</div></div>
  </body>
</form>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['submit'])) {

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


	$sql = "INSERT INTO stock (number, name)
	VALUES ('$_POST[number]', '$_POST[name]')";

	if ($conn->query($sql) === TRUE) {
	$html = 
	"
	<p class='data_p_class' style='
    text-align: center;
	'>New Record created successfully</p>
	" ;
    echo "$html";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
