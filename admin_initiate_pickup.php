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
$q1=mysql_query("select company_name, address from pickup");

?>
<html>
<body>
<form method="POST" action="admin_process_initiate.php" >
<table border="1" cellspacing="2px" width="100%"><tr><td>
<CENTER>SELECT A COMPANY FROM THE LIST
<td>
<select name="company" >
<?php
while($r1=mysql_fetch_array($q1))
{
	echo "<h1><option value='".$r1['company_name'].",".$r1['address']."'>".$r1['company_name']."->".$r1['address']."</option></h1>";
}

?><br>
</select>
<tr>

<td><CENTER>SELECT A RECYCLER FOR THE COMPANY
<td>
<select name="recyler">
<?php
$q2=mysql_query("select name from recycler");
while($r2=mysql_fetch_array($q2))
{
	echo "<h1><option value='".$r2['name']."'>".$r2['name']."</option></h1>";
}
?>
</select>
<tr >
<td colspan="2" align="center" ><input width="100%" type="submit" value="            submit          ">
</form>
</body>
</html>