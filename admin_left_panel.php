<html>
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
   <tr><td style="font-size:50px">Admin</td></tr>
   <tr><td><a target="right" href="admin_show_data.php"><input type="button" value="VIEW DATABASE" style="font-size:20px" width="100%"></a></td></tr>
   <tr><td><a target="right" href="admin_initiate_pickup.php"><input type="button" value="INITIATE PICK-UP" style="font-size:20px" width="100%"></a></td></tr>
   <tr><td><a target="right" href="admin_newadmin.php"><input type="button"  value="ADD MORE ADMINS" style="font-size:20px"></a></td></tr><br></a></td></tr>
   <tr><td><a target="right" href="admin_company_add.php"><input type="button" value="ADD COMPANY" style="font-size:20px"></a></td></tr>
   <tr><td><a target="right" href="admin_company_rep_add.php"><input type="button"  value="ADD COMPANY REPRESENTATIVE" style="font-size:20px"></a></td></tr>
   <tr><td><a target="right" href="admin_recycler_add.php"><input type="button" value="ADD RECYCLER" style="font-size:20px"></a></td></tr>
   <tr><td><a target="right" href="admin_recycler_rep_add.php"><input type="button" value="ADD RECYCLER REPRESENTATIVE" style="font-size:20px"></a></td></tr>
   
   <tr><td><a target="right" href="admin_accept_order.php"><input type="button" value="CONFIRM NGO ORDER"  style="font-size:20px"></a></td></tr>
   <tr><td><a target="right" href="admin_assign_price.php"><input type="button" value="ASSIGN PRICE TO PRODUCTS" style="font-size:20px"></a></td></tr>
   <tr><td><a target="right" href="logout.php"><input type="button" value="LOGOUT" style="font-size:20px"></a></td></tr>
</table>
</body>
</html>