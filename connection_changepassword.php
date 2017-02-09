<?php 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'inventory'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
session_start();
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
		$email = $_POST['email'];
		$password = $_POST['password'];
		$newpassword = $_POST['npassword'];
		$confirmpassword = $_POST['confirmpassword'];
		$result = mysql_query("SELECT password FROM admin_registration WHERE email = '$_POST[email]' AND password = '$_POST[password]'");
		if(!$result)
		{
		echo "The email you entered does not exist";
		}
		else if($password!= mysql_result($result, 0))
		{
		echo "You entered an incorrect password";
		}
		if($newpassword==$confirmpassword)
		{
		$query=mysql_query("UPDATE admin_registration SET password='$newpassword' WHERE email = '$_POST[email]' AND password = '$_POST[password]'");
		}
		if($query)
		{
		header ("location:changesuccess.php");
		}
		else
		{
		echo "The new password and comfirm new password fields must be same.";
		}
?>