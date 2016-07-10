<html>
<head>
</head>
<body>
<?php
include('connections.php');
echo "<h1><b>Enter the pick up ID for the following lot</b>";

$address="MUMBAI"; //Assign the address
/*$q1=mysql_query("select c_name from Company where c_id='".$c_id."'");
//$r1=mysql_fetch_array($q1);
//$c_name=$r1['c_name'];
*/
$c_name="JPMC";
?>
<table border="2" width="100%" align="center">
<tr align="center">
<td width="20%">Company Name
<td width="50%">Address of Pick Up
<td width="30%">Pick up ID
</tr>
<tr align="center">
<td><?php
echo $c_name;
?>
<td><?php
echo $address;
?>
<td><form action="" type="POST">
<input type="text" name="pickup_id">
</form>
</tr>
</table>
</body>
</html>

