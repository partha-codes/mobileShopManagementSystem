<html>
<!doctype html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="register_cm.css">
   <link rel="stylesheet" type="text/css" href="style.css">
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
	<div class="Registration">
  	<div class="form">
		<form class="login-form" name="form1" action="register_cm.php" method="post">
		  <input name="name" type="text" id="myusername" placeholder="Name" ><br>
		  <input name="phone" type="text" id="myusername" placeholder="Phone" ><br>
		   <!-- <input name="email" type="email" id="myusername" placeholder="Email" ><br> -->
		  <br>
		  <button type="submit" name="submit" id="mybtn">Save</button>
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

$sql = "INSERT INTO cm (name, phone)
VALUES ('$_POST[name]', '$_POST[phone]')";

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
