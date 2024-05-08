<?php
require('db.php');

if(isset($_POST['user_email']))
{
 $emailId=$_POST['user_email'];
 $checkdata=" SELECT email FROM aidbs_singup WHERE email='$emailId' ";
 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {  echo "This email is already exist."; }
 else
 { echo ""; }
 exit(); }
?>
