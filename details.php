<html>
<head></head>
<body>
<?php
session_start();

if(!isset($_SESSION['username']))
{
    $message = 'You must be logged in to access this page';
	header("Location: index.html");
	exit;
}
include_once("Connections.php");
$companyname=$_SESSION['company'];

$result=mysql_query ("select product_id,type,RAM,HD,Processor,serial_number,status,useful,needs_recycling,doa from product where company_name='".$companyname."'");

echo "<table align=center border=2 cellspacing=5 cellpadding=10>";
echo "<tr><td>Product ID</td><td>Serial No.</td><td>Type</td><td>RAM</td><td>HARD DISK</td><td>Processor</td><td>Status</td><td>Useful</td><td>Needs Recycling</td><td>Dead or Alive</td></tr>";
while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>  ".$row['product_id']. " </td>";
  echo "<td>".$row['serial_number'] ." </td>";
  echo "<td>".$row['type'] ." </td>";
  echo "<td>".$row['RAM'] ." </td>";
  echo "<td>".$row['HD'] ." </td>";
  echo "<td>".$row['Processor'] ." </td>";
  echo "<td>".$row['status'] ." </td>";
  echo "<td>".$row['useful'] ." </td>";
  echo "<td>".$row['needs_recycling'] ." </td>";
  echo "<td>".$row['doa'] ." </td></tr>";
}
echo "</table>";
?>


</body>
</html>