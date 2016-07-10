
<html>
    <head>
        <title>Insert Refurbisher Representative </title>
        <script>
function valdate()
	{
		
		var flag = true;
	
                var f=refdetails.lid.value;
		if(f=="" || f==null)
		{
			flag=false;
			alert("ID is compulsory");
                        
		}
                
                var l=refdetails.repnm.value;
		if(l=="" || l==null)
		{
			flag=false;
			alert(" Representative name is compulsory");
                        
		}
                
                var c=refdetails.cmpny.value;
		if(c=="" || c==null)
		{
			flag=false;
			alert(" Company name is compulsory");
                        
		}

                
                var d=refdetails.design.value;
		if(d=="" || d==null)
		{
			flag=false;
			alert("Designation is compulsory");
                        
		}
                
		var phone = refdetails.mobile.value;
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
<!--
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
-->	<form method="post" action="" name="refdetails">
           <table>
               <tr>
               <td>
                Refurbisher ID:    
               </td>
               <td>
                   <input type="text" name="lid">
               </td>
               </tr>
               <tr>
               <td>
                Refurbisher Representative Name:    
               </td>
               <td>
                   <input type="text" name="repnm">
               </td>
               </tr>
		<tr>
               <td>
                Refurbisher Company Name:    
               </td>
               <td>
                   <input type="text" name="cmpny">
               </td>
               </tr>
			   <tr>
               <td>
                Designtion:    
               </td>
               <td>
                   <input type="text" name="design">
               </td>
               </tr
               <tr>
               <td>
                Mobile no:    
               </td>
               <td>
                   <input type="text" name="mobile">
               </td>
               </tr>
			   <tr>
               <td>
                   <input type="submit" value="Submit" onclick="return valdate()">
                   <td> <input type="reset" value="Reset"></td>

                   
               </td>
               </tr>
               
               </table>
<?php			   
 $password=generatePassword(9,0);
?>
			   
<?php
	if(isset($_POST['lid']))
	{
		$sql=mysql_query("insert into login(login_id, sr_no, name, password, company, user_type, designation, mobile) values ('".$_POST['lid']."','','".$_POST['repnm']."','".$password."','".$_POST['cmpny']."','recyler','".$_POST['design']."','".$_POST['mobile']."')");
		//echo "insert into login(login_id, sr_no, name, password, company, user_type, designation, mobile) values ('".$_POST['lid']."','','".$_POST['repnm']."','".$password."','".$_POST['cmpny']."','recyler','".$_POST['design']."','".$_POST['mobile']."')";
		if(!$sql)
		{
			echo mysql_error();
		}
	}
?>
          </form>
    </body>
</html>