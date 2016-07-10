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
$order_id= $_SESSION['order_id'];
$sql= mysql_query("SELECT * FROM `product` inner join `order` on product.product_id=order.product_id where order.order_id='".$order_id."'");
?>
<table border="1" width="100%">
<tr>
<td>Product ID
<td>Type
<td>Processor
<td>Ram
<td>HD
<td>Status
</tr>
<?php
while($r1=mysql_fetch_array($sql))
{
	echo "<tr>";
	echo "<td>".$r1['product_id'];
	echo "<td>".$r1['type'];
	echo "<td>".$r1['Processor'];
	echo "<td>".$r1['RAM'];
	echo "<td>".$r1['HD'];
	$_SESSION['product_id']=$r1['product_id'];
	?>
	<td>
	<form action="admin_final_process.php" method="POST"><select name="status">
	
<option value="Accepted" >ACCEPTED</option>
<option value="Not Accepted" selected>NOT ACCEPTED</option>
</select>
<input type="submit" value="Update">
</form>
	<?php
	
}

if(!$sql)
{
	echo mysql_error();
	exit;
}
?>