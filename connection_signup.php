<?php 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'inventory'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function NewUser() 
{ 
      $Name = $_POST['Name']; 
	  $adminName = $_POST['adminName']; 
	  $password = $_POST['password'];
	  $email = $_POST['email']; 
	  $status = $_POST['status'];
	  $query = "INSERT INTO admin_registration (Name,adminName,password,email,status) VALUES ('$Name','$adminName','$password','$email','$status')" or die(mysql_error()); 
	  $data = mysql_query ($query) or die(mysql_error()); 
	  if($data) 
	  { 
	  header("location:login.php"); 
	  } 
} 
function SignUp() 
{ 
if(!empty($_POST['Name'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
{ 
      $query = mysql_query("SELECT * FROM admin_registration WHERE adminName = '$_POST[adminName]' AND password = '$_POST[password]'") or die(mysql_error()); 
	  if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
	  { 
	     newuser();
	  } 
	  else 
	  { 
	     echo "SORRY...YOU ARE ALREADY REGISTERED USER..." ;
	  }  
} 
} 
if(isset($_POST['submit'])&& strlen($_POST['Name'] AND $_POST['adminName'] AND $_POST['password'] AND $_POST['email'] AND $_POST['status'])>0)
{ 
      SignUp();
} 
else
	{
	echo "information not complete..try again please..";
	}
?>
