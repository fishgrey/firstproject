<?php
require_once("connection_pdf.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT  MONTHNAME(datetime),SUM(total_sales) FROM sales GROUP BY MONTHNAME(datetime)");
$header = $db_handle->runQuery("SELECT `TABLE_NAME`,`COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='inventory' 
    AND `TABLE_NAME`='sales' AND `COLUMN_NAME` = 'total_sales'");

require('fpdf.php');
class PDF extends FPDF
{
// Page header
function Header()
{
   
    // Arial bold 15
    $this->SetFont('Arial','B',15);
	$this->Cell(-70);
    // Title
    $this->Cell(0,6,'Evergreen Bookstore',0,1,'C');
    // Line break
    $this->Ln(10);
}
}
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);	
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(47,10,$column_heading,1);
}
foreach($result as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(47,10,$column,1);
		
}
$pdf->Output();
?>