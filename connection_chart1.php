<?php 
	      define('DB_HOST', 'localhost'); 
		  define('DB_NAME', 'inventory'); 
		  define('DB_USER','root'); 
		  define('DB_PASSWORD',''); 


$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$query= <<<EOQUERY
SELECT price, SUM(book_quantity) AS total FROM book
GROUP BY price
ORDER BY price ASC
EOQUERY;
mysql_select_db('inventory');
$results = mysql_query($query);
	  while ($row = mysql_fetch_array ($results)){
		  $arr[]= array(
		  'y' =>  $row['price'],
		  'a' =>  (int) $row['total'],
		 
		  );}
		  echo json_encode($arr);
?>
