<html>
<?php
session_start();
if(!isset($_SESSION['id']))
{
	$message = 'You must be logged in to access this page';
	header("Location: login.php");
	exit;
}
$name=$_SESSION['id'];
?>
<head>

</head>
<body>
<!-- 
name of recycler
-->
<?php
echo $name;
?>
<table>
<tr>
<td width="20%">
<td width="80%" colspan="4">
</table>
</body>
</html>