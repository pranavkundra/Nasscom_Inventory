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

$admin_name=$_POST['name'];
$login_id=$_POST['loginid'];
$designation=$_POST['desig'];
$email=$_POST['email'];
$c_no=$_POST['cno'];
$password=generatePassword(9,0);
$q1=mysql_query("insert into login(login_id, sr_no, name, password, company, user_type, designation, mobile) values ('".$login_id."','','".$admin_name."','".$password."','NASSCOM','admin','".$designation."','".$c_no."')");
if(!$q1)
{
	echo mysql_error();
}
header("Location: admin_newadmin.php");
?>