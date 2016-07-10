<html>
<body>

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
<p>
<?php
$cars = $_GET['array_id'];
echo "$cars";
$final_array=array();
$final_array=str_getcsv($cars);

for($i=0;$i<count($final_array);$i++)
echo $final_array[$i];
?>
</p>

</body>
</html>