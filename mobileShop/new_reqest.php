<html>
<!doctype html>
<head>
	 <title>Parts</title>
  <link rel="stylesheet" href="new_request.css">
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
      <ul>
        <li style="font-size:15px;float:left;""><a href="index.html">Home</a></li> 
        <li style="font-size:15px;"><a href="request_display.php">Requests</a></li>
        <li style="font-size:15px;"><a href="cm_details.php">Customers</a></li>
        <li style="font-size:15px;"><a href="update_stock.php">Update</a></li>
        <li style="font-size:15px;"><a href="sales.php">Sales</a></li>     
        <li style="font-size:15px;"><a href="register_cm.php">New Customer</a></li>       
        <li style="font-size:15px;"><a href="new_reqest.php">New Request</a></li>  
        <li style="font-size:15px;"><a href="new_stock.php">New Stock</a></li>
    </ul>
</nav>

	<div class="parts">
  	<div class="form">
		<form class="login-form" name="form1"  action="new_reqest.php" method="post">
  			<input name="part_id" type="text" id="part_id" placeholder="Part_Id" ><br>
  			<input name="cm_id" type="text" id="Customer_Id" placeholder="Customer_Id" ><br>
  			<br>
  			<button type="submit" name="submit">Save</button>
  		</form>
  	</div>
  </div>
</body>
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

$sql = "INSERT INTO request (part_id, cm_id)
VALUES ('$_POST[part_id]', '$_POST[cm_id]')";

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
