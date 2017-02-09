<?php 
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$email=$_POST['email'];
$password=$_POST['password'];
$connection = mysql_connect("localhost", "root", "");
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
$db = mysql_select_db("inventory", $connection);
$query = mysql_query("SELECT * FROM admin_registration WHERE password='$password' AND email='$email'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_admin']=$email; 
header("location: profile.php");
} else {
$error = "Username or Password is invalid";
} 
mysql_close($connection);
}
}
?>

 