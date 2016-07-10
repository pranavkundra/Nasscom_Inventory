
<html>
<head>

<style>
.error {color: #FF0000;}
</style></head>

<?php
include_once("Connections.php");
session_start();

if(!isset($_SESSION['username']))
{
    $message = 'You must be logged in to access this page';
	header("Location: index.html");
	exit;
}
$type=$ram=$hdd=$processor=$status="";
$srnoerror="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$type=$_POST['type'];
$ram=test_input($_POST["ram"]);
$hdd=test_input($_POST["hd"]);
$processor=test_input($_POST["processor"]);
$status=test_input($_POST["status"]);

if(empty($_POST["srno"]))
{
$srnoerror="Serial No Required";
}
else
{
$srno=array();
$cname=$_SESSION['company'];
$p_id=$_SESSION['company'].rand(1,1000);
echo $p_id;
$srno=str_getcsv($_POST["srno"]);
$arlen=count($srno);
/*$srno=str_getcsv($_POST("srno")));*/
for($i=0;$i<$arlen;$i++){
$ql=mysql_query("INSERT INTO product (product_id,company_name,type,RAM,HD,Processor,status,serial_number) VALUES ('".$p_id."','".$cname."','".$type."','".$ram."','".$hdd."','".$processor."','".$status."','".$srno[$i]."')");
echo "INSERT INTO product (product_id,company_name,type,RAM,HD,Processor,status,serial_number) VALUES ('".$p_id."','".$cname."','".$type."','".$ram."','".$hdd."','".$processor."','".$status."','".$srno[$i]."')";
//echo "INSERT INTO product (company_name,type,RAM,HD,Processor,status,serial_number) VALUES ('".$cname."','".$type."','".$ram."','".$hdd."','".$processor."','".$status."','".$srno[$i]."')";
if($ql)
{
header('Location:addnew.php');}
}}
}
function test_input($data) {
   $data = trim($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
<body>

<form action="Product1.php" method=post>
<table border=0 align=center>
<tr colspan=2>
<td> 
<h1>PRODUCT DETAILS:</h1>
</td>
</tr>
<tr>
<td>
TYPE:
</td>
<td>
<select name="type">
<option value="pc" selected>PC</option>
<option value="laptop">Laptop</option>
</select>
</td></tr>
<tr>
<td>
RAM:</td>
<td><select name="ram">
<option value="512" selected>512MB</option>
<option value="2" >2GB</option>
<option value="4">4GB</option>
<option value="8">8GB</option>
</select>
</td>
</tr>
<tr><td>
HARD DISK:</td>
<td><select name="hd">
<option value="128" selected>128GB</option>
<option value="320" >320GB</option>
<option value="500">500GB</option>
</select>
</td>
</tr>
<tr><td>
PROCESSOR:</td>
<td>
<input type=textfield size=20 name="processor">
</td>
</tr>
<tr><td>
SERIAL No.:</td>
<td>
<input type=textfield size=20 name="srno"><span class="error">* <?php echo $srnoerror;?></span>
</td>
</tr>
<tr><td>
STATUS:</td>
<td><select name="status">
<option value="working" selected>Working</option>
<option value="nonworking" >Non-Working</option>
</select>
</td>
</tr>
<tr colspan=2>
<td align=center> 
<input type=submit value="SUBMIT" >
</td></tr>
</table>
</form>
</body>
</html>
