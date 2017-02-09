<?php 
session_start();
	  define('DB_HOST', 'localhost'); 
		  define('DB_NAME', 'inventory'); 
		  define('DB_USER','root'); 
		  define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function UpdateSales() 
{ 
      $salesID = $_POST['salesID']; 
	  $bookID = $_POST['bookID'];
	  $bookName = $_POST['bookName']; 
	  $price = $_POST['price'];
	  $quantity = $_POST['quantity'];
	  $query = "UPDATE sales SET  salesID = '$salesID', bookID = '$bookID', bookName = '$bookName', price = '$price',quantity = '$quantity',  total_sales = (price*quantity) WHERE salesID = '$salesID' "; 
	  mysql_select_db('inventory');
	  $data = mysql_query ($query) or die(mysql_error());
	  if($data) 
	  { 
	  totalquantity(); 
	  } 
} 	  
function TotalQuantity()
{
if(!empty($_POST['salesID']))
{   
    $salesID = $_POST['salesID'];
	$bookID = $_POST['bookID'];
    $quantity = $_POST['quantity'];
	$query = "UPDATE book AS b  INNER JOIN sales AS s ON b.bookID = s.bookID SET book_quantity = b.book_quantity - '$quantity' WHERE salesID='$salesID' " or die(mysql_error());
	$data = mysql_query ($query) or die(mysql_error());
	if($data)
	{
	header("location:updatesales1.php");
	}
}
}
	 if(isset($_POST['submit'])&& strlen($_POST['salesID'] AND $_POST['bookID'] AND $_POST['price'] AND $_POST['quantity'] )>0)
{ 
      updatesales();
} 
else
	{
	echo "information not complete..try again please..";
	}
?>