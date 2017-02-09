<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("inventory", $connection);
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("SELECT email FROM user_registration WHERE email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$user_session =$row['email'];
if(!isset($user_session)){
mysql_close($connection); 
header('Location: index.php');
}
?>