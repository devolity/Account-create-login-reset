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

<?php
session_start();
if(!isset($_SESSION['valid']))
{
  header("Location: index.php");
   }

else 
$foundemail = $_SESSION['valid'];
function obfuscate_email($foundemail)
{
    $em   = explode("@",$foundemail);
    $name = implode(array_slice($em, 0, count($em)-1), '@');
    $len  = floor(strlen($name)/5);

    return substr($name,0, $len) . str_repeat('**', $len) . end($em);
} ?>

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
    <h1>Account Reset &nbsp;</h1><h1 class="pull-right"><img src="css/logo.png" alt="Aidbs Logo" height="37" width="37"></h1>
  </div>

  <div class="row body"><center>
    <form name="registration" action="" method="post" autocomplete="off">
      <ul>
          <p>We found the following information associated with your account.</p>
          <div class="valid_data">
           <?php echo obfuscate_email($foundemail) . "\n"; ?>
       </div>
    <li><p>

    <p>Verify any of the above</p>
  <input type="text" name="account_check" id="valid_account" class="form-textbox" value="" autofocus="" autocorrect="off" autocapitalize="off" required />
   <br>    
    </p> </li>  
        <li><input class="btn-submit" type="submit" name="submit" value="Submit" /> </li>
     </ul>
    </form>
    </center>
  </div></div></div>

<footer><ul> &copy; Aidbs  &nbsp;<a href="https://www.aidbs.com/policies/terms/"> Terms </a> &nbsp; | &nbsp; <a href="https://www.aidbs.com/policies/privacy/"> Privacy </a></ul></footer>
<?php session_destroy(); ?>
</body>
</html>
