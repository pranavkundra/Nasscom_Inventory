<html><?phpinclude('connections.php');include('functions.php');session_start();if(!isset($_SESSION['username'])){    $message = 'You must be logged in to access this page';	header("Location: index.html");	exit;}?>
<frameset rows="15%,70%,15%">
<frame name="top" src="2.jpg"><img src="2.jpg" style="heigth:90px"/>
<frameset cols="30%,70%">
   <frame name="left" src="ngo_left_panel.php">
   <frame name="right" src="simplecounter.php">
<frame name="bottom" src="footer.html">
</frameset> 
</html>