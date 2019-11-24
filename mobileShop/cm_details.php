<html>
<!doctype html>
<head>
    <title>Parts</title>
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


<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'mb'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
   die ('Failed to connect to MySQL: ' . mysqli_connect_error()); 
}

$sql = 'SELECT id, name, phone FROM cm';
      
$query = mysqli_query($conn, $sql);

if (!$query) {
   die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
   <title>Customer</title>
   <style type="text/css">
      body {
         font-size: 15px;
         color: #343d44;
         font-family: "segoe-ui", "open-sans", tahoma, arial;
         padding: 0;
         margin: 0;
      }
      table {
         margin: auto;
         font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
         font-size: 12px;
      }

      h1 {
         margin: 25px auto 0;
         text-align: center;
         text-transform: uppercase;
         font-size: 17px;
      }

      table td {
         transition: all .5s;
      }
      
      /* Table */
      .data-table {
         border-collapse: collapse;
         font-size: 14px;
         min-width: 537px;
      }

      .data-table th, 
      .data-table td {
         border: 1px solid #e1edff;
         padding: 7px 17px;
      }
      .data-table caption {
         margin: 7px;
      }

      /* Table Header */
      .data-table thead th {
         background-color: #508abb;
         color: #FFFFFF;
         border-color: #6ea1cc !important;
         text-transform: uppercase;
      }

      /* Table Body */
      .data-table tbody td {
         color: #353535;
         text-align: center
      }
      .data-table tbody td:first-child,
      .data-table tbody td:nth-child(4),
      .data-table tbody td:last-child {
         text-align: center;
      }

      .data-table tbody tr:nth-child(odd) td {
         background-color: #f4fbff;
      }
      .data-table tbody tr:hover td {
         background-color: #ffffa2;
         border-color: #ffff0f;
      }

      /* Table Footer */
      .data-table tfoot th {
         background-color: #e5f5ff;
         text-align: right;
      }
      .data-table tfoot th:first-child {
         text-align: left;
      }
      .data-table tbody td:empty
      {
         background-color: #ffcccc;
      }
   </style>
</head>
<body>
   <h1>CUSTOMER</h1>
   <table class="data-table">
      <caption class="title">Registered Customer details</caption>
      <thead>
         <tr>
            <!-- <th>NO</th> -->
            <th>CUSTOMER_ID</th>
            <th>CUSTOMER_NAME</th>
            <th>PHONE NO.</th>
            <!-- <th>AMOUNT</th> -->
         </tr>
      </thead>
      <tbody>
      <?php
      $no   = 1;
      $total   = 0;
      while ($row = mysqli_fetch_array($query))
      {
         // $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
         echo '<tr>
               <td>'.$row['id'].'</td>
               <td>'.$row['name'].'</td>
               <td>'.$row['phone'].'</td>
               
            </tr>';
         // $total += $row['amount'];
         // $no++;
      }?>
      </tbody>
      <!-- <tfoot>
         <tr>
            <th colspan="4">TOTAL</th>
            <th><?=number_format($total)?></th>
         </tr>
      </tfoot> -->
   </table>
</body>
</html>
