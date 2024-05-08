<!DOCTYPE html>
<!--
/*
        o o     o     +   *    *       o
+   +     +      * *     o     +       +
            +
o  +    +        o  +  *     *    +        +
     ___   _   _____   _____   _____
    /   | | | |  _  \ |  _  \ /  ___/
   / /| | | | | | | | | |_| | | |___
  / / | | | | | | | | |  _  { \___  \
 / /  | | | | | |_| | | |_| |  ___| |
/_/   |_| |_| |_____/ |_____/ /_____/

o o     o     +  *    *     o
+   +     +       *      o     +       +

     ***  BY :- AIDBS  *** 

o o     o     +              o
+   +     +        *     o     +       +
            +
o  +    +        o  +  o *   +  *  O  )
*/
-->
<html>
<head>
  <meta charset="UTF-8">
  <title>Password Reset | Aidbs IT Services, Global Business Solution</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="css/favicons.ico" type="image/x-icon">
</head>
<body>
 
 <div class="wrapper">
<div class="container">
  <div class="row header">
    <h1>Account Search &nbsp;</h1><h1 class="pull-right"><img src="css/logo.png" alt="Aidbs Logo" height="37" width="37"></h1>
  </div>

<?php
session_start();
require('../db.php');
if(isset($_POST['account_check']))
{
 $value=$_POST['account_check'];
 $checkdata="SELECT email,phone FROM aidbs_singup WHERE ( email='$value' OR phone='$value')";
 $query=mysql_query($checkdata);
 $row = mysql_fetch_row($query);

 $edata = "$row[0]";
 $pfdata = substr("$row[1]", -2);
 $result = "$edata <br><br>  ******$pfdata";

 if(mysql_num_rows($query)>0)
 {
     $_SESSION['valid'] = "$result";
     header("Location: send_request");
 }
 else
 { 
  $emsg = "Sorry we couldn't find your account !";
  } 
}?>

  <div class="row body"><center>
    <form name="registration" action="" method="post" autocomplete="off">
      <ul>
      <div class="invalid_account">
        <?php 
           echo "$emsg";
          ?>
          </div>
        	<small>Find your Aidbs account</small>
        	<p>Enter your email, phone number, or username.</p>
		<li><p>
  <input type="text" name="account_check" id="valid_account" class="form-textbox" value="" autofocus="" autocorrect="off" autocapitalize="off" required />
	 <br>    
	  </p>
	  </li>  
        <li><input class="btn-submit" type="submit" name="submit" value="Search" />  </li>
     </ul>
    </form>
    </center>
  </div>
  </div>
  </div>
<footer><ul> &copy; Aidbs  &nbsp;<a href="https://www.aidbs.com/policies/terms/"> Terms </a> &nbsp; | &nbsp; <a href="https://www.aidbs.com/policies/privacy/"> Privacy </a></ul></footer>

</body>
</html>
