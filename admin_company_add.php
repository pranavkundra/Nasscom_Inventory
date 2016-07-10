
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <form method="post" action="">
           <table> 
               <tr>
               <td>
               Company Name:    
               </td>
               <td>
                   <input type="text" name="cpnm">
               </td>
               </tr>
               
               <tr>
               <td colspan="2">
                   <input type="submit" name="submit">
               </td>
               </tr>
              
               </table>
			   <?php
			   include('connections.php');

	session_start();

if(!isset($_SESSION['username']))
{
    $message = 'You must be logged in to access this page';
	header("Location: index.html");
	exit;
}

			   //$tbl_name="login"; // Table namea
if(isset($_POST['cpnm']))
  {
	$sql=mysql_query("INSERT INTO company VALUES ('".$_POST['cpnm']."','')");
	if(!$sql)
	{
		echo mysql_error();
	}
}


?>
           </form>
    </body>
</html>
