<!DOCTYPE html>
<!-- 
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
 -->
<html >
<head>
  <meta charset="UTF-8">
  <title>Thank you | Aidbs Technology IT Services, Global Business Solution</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="css/favicons.ico" type="image/x-icon">
</head>
<body>
  
<?php
session_start();
if(!isset($_SESSION['uname']))
{
  header("Location: ../");
   }

else {
  
}
?>

<div class="container">
  <div class="row header">
    <h1>THANK YOU</h1><h1 class="pull-right"><a href="https://www.aidbs.com"><img src="css/logo.png" alt="Aidbs Logo" height="37" width="37"></a></h1>
  </div>
  <div class="row body">
    <form action="#">
      <ul>
		<center><p>
		<img src="css/success.png" alt="Aidbs Sucess">
		</p>
		<br>
		<small>WELCOME !</small><br>
    <h2> 
    <?php 
     echo $_SESSION['uname'];
    ?>
    </h2>
    <small>Your Aidbs account has been created successfully ! <br>We sent you details by email shortly .!</small>
		<p>Enjoy our free Cloud Storage service to store, share & access your files securely.</p>
				
        <li><a href="https://cloud.aidbs.com"><h3>BACK TO AIDBS.COM</h3></a></li>
        </center>
        </ul>
    </form>  
  </div>
</div>

<footer><ul> &copy; Aidbs <a href="https://www.aidbs.com/policies/terms/"> Terms </a> | <a href="https://www.aidbs.com/policies/privacy/"> Privacy </a></ul></footer>
<?php session_destroy(); ?>
</body>
</html>
