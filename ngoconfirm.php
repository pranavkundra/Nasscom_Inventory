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


if ($_SERVER["REQUEST_METHOD"] == "GET") {
$oid=rand();

$desc=($_GET["desc"]);
$pur=($_GET["pur"]);


$sq=mysql_query("INSERT INTO productdescription(order_id,project_desc,purpose) values ('".$oid."','".$desc."','".$pur."')");
//echo "INSERT INTO productdescription values('".$oid."','".$desc."','".$pur."')";
if($sq)
{
echo "Order Placed Successfully";
}
}

?>