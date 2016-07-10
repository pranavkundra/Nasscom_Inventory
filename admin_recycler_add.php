
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
       <form method="post" action="">
           <table> 
               <tr>
               <td>
                Refurbisher Name:    
               </td>
               <td>
                   <input type="text" name="rcnm">
               </td>
               </tr>
               <tr>
               <td colspan="2">
                   <input type="submit" name="submit">
               </td>
               </tr>
              
               </table>
			   <?php
			   include ("connections.php");

			   //$tbl_name="login"; // Table namea
if(isset($_POST['rcnm']))
{			   
$sql=mysql_query("INSERT INTO recycler VALUES ('".$_POST['rcnm']."','')");
if(!$sql)
{
	echo mysql_error();
}
echo "<script type='text/javascript'>\n";
echo "alert('record inserted');\n";
echo "</script>";
/*if(rcnm=='')

 { echo "<script type='text/javascript'>\n";
echo "alert('name can not be blank');\n";
echo "</script>";
}*/
}			   ?>
           </form>
    </body>
</html>
