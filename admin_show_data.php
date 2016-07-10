<?php
include('connections.php');
session_start();

if(!isset($_SESSION['username']))
{
    $message = 'You must be logged in to access this page';
	header("Location: index.html");
	exit;
}

?>

<html>	
<head>
</head>
<body>
<table border="2" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" 
id="AutoNumber2" bgcolor="#C0C0C0">

<tr><h1><b>
    <td width="14%" align="center">Product_ID</td>
	<td width="14%" align="center">Type</td>
    <td width="14%" align="center">Processor</td>
	<td width="14%" align="center">RAM</td>
    <td width="14%" align="center">HD</td>
	<td width="14%" align="center">Status</td>
    <td width="14%" align="center">Serial Number</td>
	<td width="14%" align="center">Price</td>
    <td width="14%" align="center">Company Name</td>
	<td width="14%" align="center">NGO Name</td>
	</b></h1>
</tr>
<?php
$sql=mysql_query("select * from product");
while($row = mysql_fetch_array($sql)){
$product_id= $row["product_id"];
$type = $row["type"];
$processor=$row['Processor'];
$ram = $row["RAM"];
$hd= $row["HD"];
$status= $row["status"];
$serial_number = $row["serial_number"];
$price = $row["price"];
$company_name=$row['company_name'];
$ngo_name=$row['ngo_name'];
?>
<tr>
    <td width="14%" align="center"><?php {echo $product_id;} ?></td>
	<td width="14%" align="center"><?php {echo $type;} ?></td>
    <td width="14%" align="center"><?php {echo $processor;} ?></td>
	<td width="14%" align="center"><?php {echo $ram;} ?></td>
    <td width="14%" align="center"><?php {echo $hd;} ?></td>
    <td width="14%" align="center"><?php {echo $status;} ?></td>
    <td width="14%" align="center"><?php {echo $serial_number;} ?></td>
    <td width="14%" align="center"><?php {echo $price;} ?></td>
    <td width="14%" align="center"><?php {echo $company_name;} ?></td>
    <td width="14%" align="center"><?php {echo $ngo_name;} ?></td>
</tr>
<?php
}
?>
</table>
<br><br>
</body>
<html>