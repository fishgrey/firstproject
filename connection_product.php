<?php 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'inventory'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function NewBook() 
{ 
      $Name = $_POST['bookID']; 
	  $bookName = $_POST['bookName']; 
	  $author = $_POST['author'];
	  $price = $_POST['price'];
	  $quantity = $_POST['book_quantity'];
	  $query = "INSERT INTO book (bookID,bookName,author,price,book_quantity) VALUES ('$Name','$bookName','$author','$price','$quantity')" or die(mysql_error()); 
	  $data = mysql_query ($query) or die(mysql_error()); 
	  if($data) 
	  { 
	  header("location:inventory.php"); 
	  } 
} 
function Book() 
{ 
if(!empty($_POST['bookID'])) 
{ 
      $query = mysql_query("SELECT * FROM book WHERE bookID = '$_POST[bookID]' AND bookName = '$_POST[bookName]'") or die(mysql_error()); 
	  if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
	  { 
	     newbook();
	  } 
	  else 
	  { 
	     header ("location: addproductwrong.php") ;
	  }  
} 
} 
if(isset($_POST['submit'])&& strlen($_POST['bookID'] AND $_POST['bookName'] AND $_POST['price'] AND $_POST['book_quantity'] )>0)
{ 
      Book();
} 
else
	{
	echo "information not complete..try again please..";
	}
?>
