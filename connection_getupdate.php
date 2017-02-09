<?php 
	  define('DB_HOST', 'localhost'); 
		  define('DB_NAME', 'inventory'); 
		  define('DB_USER','root'); 
		  define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(! $con )
            {
               die('Could not connect: ' . mysql_error());
            }
 	  $bookID = $_GET['bookID'];
	  $bookName = $_GET['bookName'];
	  $author = $_GET['author']; 
	  $price = $_GET['price'];
	  $book_quantity = $_GET['book_quantity'];
	  $query = "SELECT bookID,bookName,author,price,book_quantity FROM book WHERE bookID = '$bookID'"; 
	  mysql_select_db('inventory');
	  
	  $retval = mysql_query( $query, $con );
	  if(! $retval) 
	  { 
	  die('Could not update data: ' . mysql_error());
      }else{
           header("location:updateproduct.php");
	  }
  mysql_close($con);

?>