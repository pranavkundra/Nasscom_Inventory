<html>
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
    <head>
        <title>TODO supply a title</title>
        <script>
function validate()
	{
		
		var flag = true;
	
                var f=admindetails.name.value;
		if(f=="" || f==null)
		{
			flag=false;
			alert("Name is compulsory");
                        
		}
                
                var l=admindetails.loginid.value;
		if(l=="" || l==null)
		{
			flag=false;
			alert(" Login id is compulsory");
                        
		}
                
                var x = admindetails.email.value;
		
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (x==null || x=="")
		{
			alert("Email ID must be filled out.");
			flag = false;
                        
		}
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			alert("Not a valid e-mail address");
			flag = false;
                        
		}
                
                var d=admindetails.desig.value;
		if(d=="" || d==null)
		{
			flag=false;
			alert("Designation is compulsory");
                       
		}
                
		var phone = admindetails.cno.value;
		if(phone.length<10 || phone.length>10)
		{	alert("You have entered an invalid phone number");
			flag= false;
                        
		}
		else if(isNaN(phone))
		{
			alert("Number must be numeric.");
			flag= false;
                        
		}
                
		return flag;
	}
</script>

    </head>
    <body>
        <form name="admindetails" method="post" action="add_admin_submit.php">
            <table>
                 <tr>
                    <td>Admin name:</td><td><input type="text" name="name"></td>
                </tr>
                
                <tr>
                    <td>Login ID:</td><td><input type="text" name="loginid"></td>
                </tr>
                <tr>
                    <td>Email ID:</td><td><input type="text" name="email"></td>
                </tr>
                
                <!-- Set user type  to "admin" && company to "Nasscom"-->
                  <tr>
                    <td>Designation:</td><td><input type="text" name="desig"></td>
                </tr>
                 <tr>
                    <td>Contact no: </td><td><input type="text" name="cno"></td>
                </tr>

                <tr>
                    <td> <input type="submit" value="Submit" onclick="return validate()"></td>
                    <td> <input type="reset" value="Reset"></td>

                </tr>
               

            </table>
        </form>

    </body>
</html>
