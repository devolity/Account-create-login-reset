<?php

require('../db.php');
if(isset($_POST['account_check']))
{
 $emailId=$_POST['account_check'];
 $checkdata="SELECT * FROM aidbs_singup WHERE ( email='$emailId' OR phone = '$emailId' )";
 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {  die("<script>location.href = 'error/qano'</script>"); }
 else
 {  
 	session_start();
  $_SESSION['uname'] = $query;
  }
 exit(); 
}
?>
