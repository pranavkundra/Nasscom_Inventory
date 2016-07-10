<?php

include('connections.php');
include('functions.php');
session_start();

if(!isset($_SESSION['username']))
{
    $message = 'You must be logged in to access this page';
	header("Location: index.html");
	exit;
}


$sql= mysql_query("SELECT * FROM `product` inner join `order` on product.product_id=order.product_id where ngo_name='".$_SESSION['company']."' AND status='Accepted'");
?>

<html>	
<head>
<title>Check the status!</title>
</head>
<body>
<form method="post" >
<table border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" 
id="AutoNumber2" bgcolor="#C0C0C0">
<tr>
    <td width="14%" align="center">Order_ID</td>
    <td width="14%" align="center">Product_ID</td>
    <td width="14%" align="center">Status</td>
    <td width="14%" align="center">Serial Number</td>
    <td width="14%" align="center">Type</td>
    <td width="14%" align="center">RAM</td>
    <td width="14%" align="center">HD</td>
    <td width="14%" align="center">Processor</td>
</tr>
<?php
while($row = mysql_fetch_array($sql)){
$order_id = $row["order_id"];
$product_id= $row["product_id"];
$status= $row["status"];
$serial_number = $row["serial_number"];
$Processor = $row["Processor"];
$type = $row["type"];
$RAM = $row["RAM"];
$HD = $row["HD"];

?>
<tr>
    <td width="14%" align="center"><?php {echo "$order_id";} ?></td>
    <td width="14%" align="center"><?php {echo "$product_id";} ?></td>
    <td width="14%" align="center"><?php {echo "$status";} ?></td>
    <td width="14%" align="center"><?php {echo "$serial_number";} ?></td>
    <td width="14%" align="center"><?php {echo "$type";} ?></td>
    <td width="14%" align="center"><?php {echo "$RAM";} ?></td>
    <td width="14%" align="center"><?php {echo "$HD";} ?></td>
    <td width="14%" align="center"><?php {echo "$Processor";} ?></td>

</tr>
<?php
}
?>
</table>
<br><br>
</form>
</body>
<html>