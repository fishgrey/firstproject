<?php 
session_start();
	  define('DB_HOST', 'localhost'); 
		  define('DB_NAME', 'inventory'); 
		  define('DB_USER','root'); 
		  define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
      
	  $bookID = $_POST['bookID']; 
      $query = "DELETE FROM book WHERE bookID='$bookID'";
				
	  mysql_select_db('inventory');
	  
	  $retval = mysql_query( $query, $con );
	  if(! $retval) 
	  { 
	  die('Could not update data: ' . mysql_error());
      }else{
           header("location:addproduct.php");
	  }
  mysql_close($con);
	
	
?>