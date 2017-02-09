<?php
require_once("connection_pdf.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM book WHERE book_quantity !=0");
$header = $db_handle->runQuery("SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='inventory' 
    AND `TABLE_NAME`='book'");

require('fpdf.php');
class PDF extends FPDF
{
// Page header
function Header()
{
   
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Title
    $this->Cell(0,6,'Evergreen Bookstore',0,1,'C');
    // Line break
    $this->Ln(10);
}
}
$pdf = new PDF();
$pdf->AddPage('L');
$pdf->SetFont('Arial','B',10);	
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(47,10,$column_heading,1);
}
foreach($result as $row) {
	$pdf->SetFont('Arial','',10);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(47,10,$column,1);
		
}
$pdf->Output();
?>