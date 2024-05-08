<?php
/*
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
*/
?>

<?php
	session_start();
	require('db.php');
    if (isset($_POST['fname'])){
    $first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $state = $_POST['state'];
    $country = $_POST['country'];
		$passwd = $_POST['passwd'];
		$gender = $_POST['gender'];
		$birthday = $_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
		$fullname = $_POST['fname'].' '.$_POST['lname'];
		//<!-- *************************************************** -->
		$first_name = stripslashes($first_name);
		$first_name = mysql_real_escape_string($first_name);
		$last_name = stripslashes($last_name);
		$last_name = mysql_real_escape_string($last_name);
		$phone = stripslashes($phone);
		$phone = mysql_real_escape_string($phone);
    $address = stripslashes($address);
    $address = mysql_real_escape_string($address);
    $city = stripslashes($city);
    $city = mysql_real_escape_string($city);
    $pincode = stripslashes($pincode);
    $pincode = mysql_real_escape_string($pincode);
    $state = stripslashes($state);
    $state = mysql_real_escape_string($state);
    $country = stripslashes($country);
    $country = mysql_real_escape_string($country);
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		$salt = '+#&6@#+%3?#2';
		$password = sha1($salt.$passwd);
		$password = mysql_real_escape_string($password);
		$gender = stripslashes($gender);
		$gender = mysql_real_escape_string($gender);
		//<!-- *************************************************** -->
		$parts = explode("@", "$email");
		$username = $parts[0];
		$_SESSION['uname'] = $username;
		//
		$reg_date = date("Y-m-d H:i:s");
		//<!-- *************************************************** -->
		$checkdata=" SELECT email FROM aidbs_singup WHERE email='$email' ";
		$query=mysql_query($checkdata);
		if(mysql_num_rows($query)>0)
		{
		die("<script>location.href = 'error/eava'</script>");
		}
		$checkdata=" SELECT phone FROM aidbs_singup WHERE phone='$phone' ";
		$query=mysql_query($checkdata);	
		if(mysql_num_rows($query)>0)
		{
		die("<script>location.href = 'error/qano'</script>");
		}
		//<!-- *************************************************** -->
$query = "INSERT into `aidbs_singup` (fname, lname, email, phone, address, city, pincode, state, country, gender, birthday, username, password, domain, subdate) VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$city', '$pincode', '$state', '$country', '$gender', '$birthday', '$username', '$password', 'Aidbs_SingUp', '$reg_date')";
        $result = mysql_query($query);
        // $query = "INSERT into `oc_users` (uid, displayname, password) VALUES ('$username', '$fullname', '$password')";
        // $result = mysql_query($query);
       // die('Could not connect: ' . mysql_error());
		//<!-- *************************************************** -->
        if($result){
        die("<script>location.href = 'thank-you/'</script>");
			}
		}else{
?>

<?php mysql_close($connection); } ?>
