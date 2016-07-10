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
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <script>
            function val()
	{
		
		var flag = true;
	
                var f=crepdetails.cid.value;
		if(f=="" || f==null)
		{
			flag=false;
			alert("ID is compulsory");
                        
		}
                
                var l=crepdetails.repnm.value;
		if(l=="" || l==null)
		{
			flag=false;
			alert(" Representative name is compulsory");
                        
		}
                
                var c=crepdetails.lid.value;
		if(c=="" || c==null)
		{
			flag=false;
			alert(" Login ID is compulsory");
                        
		}

                
                var d=crepdetails.design.value;
		if(d=="" || d==null)
		{
			flag=false;
			alert("Designation is compulsory");
                        
		}
                
                var x = crepdetails.email.value;
		
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (x==null || x=="")
		{
			alert("Email ID must be filled out.");
			flag = false;
                        return flag;
		}
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			alert("Not a valid e-mail address");
			flag = false;
                        return flag;
		}
                
		var phone = crepdetails.mobile.value;
		if(phone.length<10 || phone.length>10)
		{	alert("You have entered an invalid phone number");
			flag= false;
                        return flag;
		}
		else if(isNaN(phone))
		{
			alert("Number must be numeric.");
			flag= false;
                        return flag;
		}
                
		return flag;
	}

            </script>
            
    </head>
    <body>
       <form method="post" name="crepdetails" action="">
           <table>
               <tr>
               <td>
                Company Name:    
               </td>
               <td>
                   <input type="text" name="cid">
               </td>
               </tr>
               <tr>
               <td>
                Company Representative Name:    
               </td>
               <td>
                   <input type="text" name="repnm">
               </td>
               </tr>

               <tr>
               <td>
                Login ID:    
               </td>
               <td>
                   <input type="text" name="lid">
               </td>
               </tr>

               <tr>
               <td>
                Designation:    
               </td>
               <td>
                   <input type="text" name="design">
               </td>
               </tr>
               
               <tr>
               <td>
                Email ID:
               </td>
               <td>
                   <input type="text" name="email">
               </td>
               </tr>

               <tr>
               <td>
                Mobile no:    
               </td>
               <td>
                   <input type="text" name="mobile">
               </td>
               </tr>
			   <tr>
               <td colspan="2">
                   <input type="submit" value="Submit" onclick="return val()">
                    <td> <input type="reset" value="Reset"></td>

                   
               </td>
               </tr>
               
               </table>
			   <?php
			  
 $password=generatePassword(9,0);
 //echo $password;
 if(isset($_POST['lid']))
	{
		$sql=mysql_query("insert into login(login_id, sr_no, name, password, company, user_type, designation, mobile) values ('".$_POST['lid']."','','".$_POST['repnm']."','".$password."','".$_POST['cid']."','company','".$_POST['design']."','".$_POST['mobile']."')");
		//echo "insert into login(login_id, sr_no, name, password, company, user_type, designation, mobile) values ('".$_POST['lid']."','','".$_POST['repnm']."','".$password."','".$_POST['cid']."','company','".$_POST['design']."','".$_POST['mobile']."')";
		if(!$sql)
		{
			echo mysql_error();
		}
	}
?>
           </form>
    </body>
</html>
