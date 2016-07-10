<?php
include('connections.php');
$myusername=mysql_real_escape_string($_POST['user']);
$mypassword=mysql_real_escape_string($_POST['password']);

$sql="SELECT name,password FROM `login` WHERE login_id='".$myusername."' and password='".$mypassword."' and user_type='".$_POST['regtype']."'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
if($count>0)
{
  // Register $myusername, $mypassword and redirect to file "login_success.php"
	session_start();
	$_SESSION['username'] = $myusername;
	$q1=mysql_query("select company, user_type from login where login_id='".$myusername."' ");
	
	while($r1=mysql_fetch_row($q1))
	{
		$_SESSION['company']=$r1[0];
		$_SESSION['type']=$r1[1];
		//echo $_SESSION['company'];
		//echo $_SESSION['type'];
	}
  //header("location: login_success.php");
$answer = $_POST['regtype']; 
//echo $answer; 
if ($answer == "admin") 
{          
       header( 'Location: admin.php' ) ;
}
if ($answer == "ngo") 
{          
       header( 'Location: ngo.php' ) ;
}
if ($answer == "company") 
{          
       header( 'Location: company.php' ) ;
}

if ($answer == "recycler") 
{          
       header( 'Location: recycler.php' ) ;
}


} 
else 
{
echo "<script type='text/javascript'>\n";
echo "window.location='index.html'";
echo "</script>";
}

?>