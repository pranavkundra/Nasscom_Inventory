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

error_reporting(0);

$sql= mysql_query("SELECT * FROM product where status = 'working'");
$string="";
?>

<html>	<head>
<title></title>
</head>
<body>
<form method="get" action="ngobuy.php" >
<table border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" 
id="AutoNumber2" bgcolor="#C0C0C0">
<tr>
    <td width="14%" align="center">Buy</td>
    <td width="14%" align="center">Type</td>
    <td width="14%" align="center">RAM</td>
    <td width="14%" align="center">HARD DISK</td>
	<td width="14%" align="center">Processor</td>
	<td width="14%" align="center">Speed</td>
</tr>

<?php
while($row = mysql_fetch_array($sql)){
$type = $row["type"];
$ram= $row["RAM"];
$hd = $row["HD"];
$processor=$row['Processor'];
$speed=$row['Speed'];
$prd_id=$row['product_id'];
//echo "$prd_id";
?>

<tr> 
    <td width="14%" align="center"><input type="checkbox" id="buy" name="buy[]" value="<?php echo $prd_id;?>"></td>
    <td width="14%" align="center"><?php {echo "$type";} ?></td>
    <td width="14%" align="center"><?php {echo "$ram";} ?></td>
    <td width="14%" align="center"><?php {echo "$hd";} ?></td>
	<td width="14%" align="center"><?php {echo "$processor";} ?></td>
	<td width="14%" align="center"><?php {echo "$speed";} ?></td>
</tr>
<?php
}
?>
</table>
<br><br>
<center><input type="submit" value="      SUBMIT      "></center>
</form>
</body>
<html>