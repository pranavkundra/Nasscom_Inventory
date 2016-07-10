<!DOCTYPE html>

<html>

<body>
	<div>
		<h3>Offer PC Return</h3>	
	</div>

	<div>
		<form>
			<table>
				<tr>
					<td><p>Recipient</p></td>
					<td><input type="text" value="Recipient" placeholder="Enter recipient"></td>
				</tr>
				<tr>
					<td><p>Subject</p></td>
					<td><input type="textarea" value="Subject" placeholder="Enter subject"></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>








<?phperror_reporting(0);
/*
	Download PhpMailer from the following link:
	https://github.com/Synchro/PHPMailer (CLick on Download zip on the right side)
	Extract the PHPMailer-master folder into your xampp->htdocs folder
	Make changes in the following code and its done :-)
	
	You will receive the mail with the name Root User.
	To change the name, go to class.phpmailer.php file in your PHPMailer-master folder,
	And change the name here: 
	public $FromName = 'Root User';
*/
require("PHPMailer-master/class.phpmailer.php");
ini_set("SMTP","ssl://smtp.gmail.com"); 
ini_set("smtp_port","465"); //No further need to edit your configuration files.
$mail = new PHPMailer();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->SMTPSecure = "ssl";
$mail->Username = "trials.php@gmail.com"; //account with which you want to send mail.
$mail->Password = "********"; //this account's password.
$mail->Port = "465";
$mail->IsSMTP();  // telling the class to use SMTP
$rec1="xxxx@gmail.com"; 
$rec2="yyyy@gmail.com"; //email addresses to which u want to send the mail.
$mail->AddAddress($rec1);
$mail->AddAddress($rec2); 
$mail->Subject  = "Eventbook";
$mail->Body     = "Hi! \n\n Wow. This is actually working. I cant believe it!";
$mail->WordWrap = 50;
if(!$mail->Send()) {
echo 'Message was not sent!.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent!.';
}
?>