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
$p_id=$_SESSION['product_id'];
$status=$_POST['status'];
//echo $p_id;
//echo $status;
$q1=mysql_query("update `product` set status='".$status."' where product_id='".$p_id."'");
if(!$q1)
{
echo mysql_error();
}
else
{
		header('Location: admin_accept_order.php');
}
?>