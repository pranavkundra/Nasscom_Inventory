<html>
    <head>
        <title>Assign a price to configuration</title>
        
    </head>
<?php
include("connections.php");
session_start();

if(!isset($_SESSION['username']))
{
    $message = 'You must be logged in to access this page';
	header("Location: index.html");
	exit;
}
?>
    <body>

        <form name="insertprice" method="post" action="">
            <table>
               
               <tr>
                    <td>Type</td><td><select name="type">
  <option value="Laptop">Laptop</option>
  <option value="PC">PC</option>
</select></td>
                </tr>
                
                
                <tr>
                    <td>Processor: </td><td><input type="text" name="proc"></td>
                </tr>
                
                <tr>
                    <td>RAM:</td><td><select name="ram">
  <option value="256MB">256 MB</option>
  <option value="512MB">512 MB</option>
  <option value="1GB">1 GB</option>
  <option value="2GB">2 GB</option>
  <option value="4GB">4 GB</option>
  <option value="8GB">8 GB</option>
  
  
</select></td>
                </tr>
                
                
                <tr>
                    <td>HDD</td><td><select name="hdd">
  <option value="64GB">64 GB</option>
  <option value="128GB">128 GB</option>
  <option value="256GB">256 GB</option>
  <option value="512GB">512 GB</option>
  <option value="1TB">1 TB</option>
  <option value="2GB">2 TB</option>
  
  
</select></td>
                </tr>
                
               <tr>
                    <td>Price </td><td><input type="text" name="price"></td>
                </tr>
                
                <tr>
                    <td> <input type="submit" value="Submit"></td>
                    <td> <input type="reset" value="Reset"></td>

                </tr>
 
            </table>
        </form>
<?php
if(isset($_POST['proc']))
{
	$type=$_POST['type'];
	$processor=$_POST['proc'];
	$ram=$_POST['ram'];
	$hdd=$_POST['hdd'];
	$price=$_POST['price'];
	
	$q1=mysql_query("update product set price='".intval($price)."' where type='".$type."' and Processor='".$processor."' and RAM='".$ram."' and HD='".$hdd."'");
	//echo "update product set price='".intval($price)."' where type='".$type."' and Processor='".$processor."' and RAM='".$ram."' and HD='".$hdd."'";
	if(!$q1)
	{
		echo mysql_error();
	}
	
}
?>
</body>
</html>
    