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

 	  $bookID = $_POST['bookID'];
	  $bookName = $_POST['bookName'];
	  $author = $_POST['author']; 
	  $price = $_POST['price'];
	  $book_quantity = $_POST['book_quantity'];
	  $query = "UPDATE book SET  bookID = '$bookID',bookName = '$bookName',author = '$author',price = '$price', book_quantity = '$book_quantity' WHERE bookID = '$bookID'"; 
	  mysql_select_db('inventory');
	 $retval = mysql_query( $query, $con );
	  if(! $retval) 
	  { 
	  die('Could not update data: ' . mysql_error());
      }else{
           header("location:updateproduct1.php");
	  }
  mysql_close($con);

?>