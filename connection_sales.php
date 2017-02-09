<?php 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'inventory'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function NewSales() 
{ 
      $salesID = $_POST['salesID']; 
	  $bookID = $_POST['bookID']; 
	  $bookName = $_POST['bookName'];
	  $price = $_POST['price'];
	  $quantity = $_POST['quantity'];
	  
	  $query = "INSERT INTO sales (salesID,bookID,bookName,price,quantity) VALUES ('$salesID','$bookID','$bookName','$price','$quantity') " or die(mysql_error()); 
	  $data = mysql_query ($query) or die(mysql_error()); 
	  if($data) 
	  { 
	  totalsales(); 
	  } 
} 
function TotalSales()
{
if(!empty($_POST['salesID']))
{
	$query = "UPDATE sales SET total_sales = (price*quantity)" or die(mysql_error());
	$data = mysql_query ($query) or die(mysql_error());
	if($data)
	{
	totalquantity();
	}
}
}
function TotalQuantity()
{
if(!empty($_POST['salesID']))
{   
    $bookID = $_POST['bookID'];
    $quantity = $_POST['quantity'];
	$query = "UPDATE book AS b  INNER JOIN sales AS s ON b.bookID = s.bookID SET book_quantity = b.book_quantity - '$quantity'" or die(mysql_error());
	$data = mysql_query ($query) or die(mysql_error());
	if($data)
	{
	header("location:sales.php");
	}
}
}
if(isset($_POST['submit'])&& strlen($_POST['salesID'] AND $_POST['bookID'] AND $_POST ['bookName'] AND $_POST['price'] AND $_POST['quantity'] )>0)
{ 
      newsales();
} 
else
	{
	echo "information not complete..try again please..";
	}
?>
