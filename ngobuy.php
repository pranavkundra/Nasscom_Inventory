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
?>
<html><head></head><center><body><?php

error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "GET") {


$oid=rand();
$item = $_GET['buy'];
$_SESSION['order']=$item;
?>
<table border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" id="AutoNumber2" bgcolor="#C0C0C0">

<tr>
   
    <td width="14%" align="center">Type</td>
    <td width="14%" align="center">RAM</td>
    <td width="14%" align="center">HARD DISK</td>
	<td width="14%" align="center">Processor</td>
	<td width="14%" align="center">Speed</td>
</tr><?php
//echo $item;
$arlngth=count($item);
//print_r($item);
//echo $item[0]."item0";
//echo $arlngth;

for ($i=0;$i<$arlngth;$i++){
//echo $buy."<br>";
$sql= mysql_query("SELECT * FROM product where product_id = '".$item[$i]."'");

while($row = mysql_fetch_array($sql)){
$type = $row["type"];
$ram= $row["RAM"];
$hd = $row["HD"];
$processor=$row['Processor'];
$speed=$row['Speed'];
?>
<tr>
<td width="14%" align="center"><?php {echo "$type";} ?></td>
    <td width="14%" align="center"><?php {echo "$ram";} ?></td>
    <td width="14%" align="center"><?php {echo "$hd";} ?></td>
	<td width="14%" align="center"><?php {echo "$processor";} ?></td>
	<td width="14%" align="center"><?php {echo "$speed";} ?></td></tr>
<?php 
//}}
}}}

?>

</table>
<form action="ngoconfirm.php" method="get">
<h3>Project Description:</h3><textarea name="desc" rows="10" cols="30"></textarea><br>
<h3>Purpose:</h3><textarea rows="10" name="pur" cols="30"></textarea><br>
</center>


<input type="submit" value="PLACE ORDER">
</form>
</body>
</html>
<?php

