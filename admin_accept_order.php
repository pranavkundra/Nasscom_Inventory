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
 $q1=mysql_query("select * from `order` where order_status='pending'");
 echo '<table border=1 width="100%">';
 
 while($r1=mysql_fetch_array($q1))
{
	$order_id=$r1['order_id'];
	$order_status=$r1['order_status'];
	echo "<tr>";
	echo "<td>".$order_id;
	echo "<td>".$order_status;
	$_SESSION['order_id']=$order_id;
	echo '<td><a href="admin_process_order.php?order_id="'.$order_id.'><input type="button" value="Process Order" width="100%"></a>';
	
	echo "</tr>";
} 
echo "</table>";
?>