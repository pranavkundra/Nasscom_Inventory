<html>
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
<head>
<style>
.buttons { 

  width: 100%;
  
  border-collapse: collapse;

}

input[type=button] {
  height:50px;
}
.buttons input { 
  width: 100%;
}
</style>
</head>
<body>
<table style="margin-top:0px; padding-top:0px;" class=buttons width="100%">
   <tr><td style="font-size:50px"><?php
   echo $_SESSION['company'];
   ?></td></tr>
   <tr><td><a target="right" href="simplecounter.php"><input type="button" value="VIEW INVENTORY" style="font-size:20px" width="100%"></a></td></tr>
   <tr><td><a target="right" href="track.php"><input type="button" value="CHECK ITEM STATUS" style="font-size:20px" width="100%"></a></td></tr>
   <tr><td><a target="right" href="mail.php"><input type="button"  value="DEAD ITEM REQUEST" style="font-size:20px"></a></td></tr><br></a></td></tr>
   <tr><td><a target="right" href="logout.php"><input type="button" value="LOGOUT" style="font-size:20px"></a></td></tr>
</table>
</body>
</html>