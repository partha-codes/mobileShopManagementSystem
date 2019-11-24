<html>
<!doctype html>
<head>
	 <title>Parts</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="update.css">
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


<?php
$conn = new mysqli("localhost","root","","mb");




?>

<div class="Sales">
		<div class="form">
<form name="updation" method="post">

<?php 
	//query
	$sql="SELECT part_id,name FROM stock";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)) {
		$select= '<select id="select" name="select">';
		$select.='<option>Choose a mobile</option>';
		while($rs=mysqli_fetch_array($result)) {
      		$select.='<option name="part" value="'.$rs['part_id'].'">'.$rs['name'].'</option>';
  		}

	}
	$select.='</select>';
	echo $select;
?>
<br>
<?php

		$sql="SELECT id,name FROM cm";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)) {
		$select= '<select id="select1" name="select1">';
		$select.='<option>Choose a customer</option>';
		while($rs=mysqli_fetch_array($result)) {
      		$select.='<option name="part" value="'.$rs['id'].'">'.$rs['name'].'</option>';
  		}

	}
	$select.='</select>';
	echo $select;


?>


<br>
<input type="date" name='date'>

<button name="submit" onclick="exec()">save</button>
</form>
</div>
</div>

<?php
if(isset($_POST['select'])) {
$a = $_POST['select'];
$d = $_POST['date'];
$b = $_REQUEST['select1'];

$query = "insert into sales(pid,cm_id,day) values('$a','$b','$d')";
$query1 = "call p1('$a')";
$res = mysqli_query($conn, $query);
$res1 = mysqli_query($conn, $query1);
}
?>
<script type="text/javascript">
	function exec1(){
		exec();
		myAjax();
	}
	function exec() {
		var e = document.getElementById("select");
	var val = e.options[e.selectedIndex].value;
	}
	
	 function myAjax(){
    $.ajax({
      type: "POST",
      url: 'news.php',
      data: ({varr:val}),
      success: function(data) {
        alert(data);
      }
    });
  }


</script>
