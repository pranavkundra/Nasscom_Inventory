<html>
<head>
<script>
function registrationValidate()
	{
		
		var flag = true;
		var f=product_details.sno.value;
		if(f=="" || f==null || f.length<2)
		{
			flag=false;
			alert("Serial numbers is compulsory");
		}
		var p=product_details.processor.value;
		if(p=="" || p==null || p.length<2)
		{
			flag=false;
			alert("Processor details is compulsory");
		}
		var ps=product_details.p_speed.value;
		if(ps=="" || ps==null || ps.length<2)
		{
			flag=false;
			alert("Processor Speed details is compulsory");
		}
		
		return flag;
	}
</script>
</head>
<body>
<?php
include('connections.php');

	session_start();

if(!isset($_SESSION['username']))
{
    $message = 'You must be logged in to access this page';
	header("Location: index.html");
	exit;
}
?>
<form name="product_details" action="update_status.php" method="POST">
<table border=1 align=center>
<tr>
<td colspan="2"> 
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
<option value="pc" >2GB</option>
<option value="laptop">4GB</option>
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
PROCESSOR SPEED:</td>
<td>
<input type=textfield size=20 name="p_speed">
</td>
</tr>

<tr><td>
SERIAL No.:</td>
<td>
<input type=textfield size=20 name="sno">*
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
<tr><td>
USEFUL:</td>
<td><select name="useful">
<option value="yes" selected>YES</option>
<option value="no" >NO</option>
</select>
</td>
</tr>
<tr><td>
NEEDS RECYCLING:</td>
<td><select name="recycling">
<option value="yes" selected>YES</option>
<option value="no" >NO</option>
</select>
</td>
</tr>
<tr><td>
DEAD OR ALIVE:</td>
<td><select name="alive">
<option value="alive" selected>ALIVE</option>
<option value="dead" >DEAD</option>
</select>
</td>
</tr>

<tr>
<td align=center colspan=2><br>
<input type=submit value="SUBMIT" onclick="return registrationValidate()" >
</td></tr>
</table>
</form>
</body>
</html>
