<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("inventory", $connection);
session_start();
$user_check=$_SESSION['login_admin'];
$ses_sql=mysql_query("SELECT email FROM admin_registration WHERE email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$admin_session =$row['email'];
if(!isset($admin_session)){
mysql_close($connection); 
header('Location: index.php');
}
?>