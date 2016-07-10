<?php
include('connections.php');

	session_start();

if(!isset($_SESSION['username']))
{
    $message = 'You must be logged in to access this page';
	header("Location: index.html");
	exit;
}


//session code


$type=$_POST['type'];
$ram=$_POST['ram'];
$hd=$_POST['hd'];
$processor=$_POST['processor'];
$status=$_POST['status'];
$p_speed=$_POST['p_speed'];
$useful=$_POST['useful'];
$recycling=$_POST['recycling'];
$alive=$_POST['alive'];
$serial_no_array=array();

$serial_no_array=str_getcsv($_POST['sno']);
$arrlen=count($serial_no_array);
$i=0;
for($i=0;$i<$arrlen;$i++)
{
	$temp= $serial_no_array[$i];
	
	//echo $temp;
	$q1=mysql_query("update product set type='".$type."', RAM='".$ram."', HD='".$ram."', Processor='".$processor."', Speed='".$p_speed."', status='".$status."',useful='".$useful."',needs_recycling='".$recycling."',doa='".$alive."' where serial_number='".$temp."'");
	//echo "update product set type='".$type."', RAM='".$ram."', HD='".$ram."', Processor='".$processor."', Speed='".$p_speed."', status='".$status."','".$useful."','".$recycling."','".$alive."' where serial_number='".$temp."'";
	if(!$q1)
	{
		echo mysql_error();
	}
	else
	{
		echo "UPDATED SUCCESSFULLY";
		echo "<br><a href='logout.php'>LOGOUT</a>";
		echo "<br><a href='recycler_update_status.php'>UPDATE OTHER PRODUCTS</a>";
	}
}

/*echo $type;
echo $ram;
echo $hd;
echo $processor;
echo $status;
//echo $serial_no_array;*/
?>