<?php 
session_start();
	  define('DB_HOST', 'localhost'); 
		  define('DB_NAME', 'inventory'); 
		  define('DB_USER','root'); 
		  define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(! $con )
            {
               die('Could not connect: ' . mysql_error());
            }
      $salesID = $_POST['salesID']; 
	  $query = "DELETE FROM sales WHERE salesID = '$salesID'"; 
	  mysql_select_db('inventory');
	  
	  $retval = mysql_query( $query, $con );
	  if(! $retval) 
	  { 
	  die('Could not update data: ' . mysql_error());
      }else{
           header("location:deletesales.php");
	  }
  mysql_close($con);

?>