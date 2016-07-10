<?php 
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo '<script language="javascript">'; 
        echo 'top.location.href = "../nascomm_inventory/index.html";'; 
        echo '</script>'; 
exit;
?>