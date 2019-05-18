<?php
require('html_table.php');

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

// HORAS MIN 1
$pdf->Cell(25,8,' Horas: ',1,0,'L',0);
$pdf->Cell(25,8,' Min: ',1,0,'L',0);

// HORAS MIN 2
$pdf->SetX(140,20);
$pdf->Cell(25,8,' Horas: ',1,0,'L',0);
$pdf->Cell(25,8,' Min: ',1,0,'L',0);

// TABELA 3
$pdf->ln(20);
$pdf->SetX(40,20);

$pdf->Cell(65,8,'h1',1,0,'C',0);
$pdf->Cell(65,8,'h2',1,0,'L',0);
$pdf->ln();
$pdf->SetX(40,20);

$pdf->Cell(65,8,'',1,0,'L',0);
$pdf->Cell(65,8,'',1,0,'L',0);
$pdf->ln();
$pdf->SetX(40,20);

$pdf->Cell(65,8,'',1,0,'L',0);
$pdf->Cell(65,8,'',1,0,'L',0);
$pdf->ln();
$pdf->SetX(40,20);
$pdf->Cell(65,8,'',1,0,'L',0);
$pdf->Cell(65,8,'',1,0,'L',0);

// TABELA 4 (3 X 3)
$pdf->ln(20);
$pdf->SetXY(15,80);

$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->ln();
$pdf->SetXY(15,88);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->SetXY(15,96);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);


// TABELA 5 (3 X 7)
$pdf->ln(10);
$pdf->SetXY(15,120);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->SetXY(15,128);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->SetXY(15,136);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->SetXY(15,144);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->SetXY(15,152);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->SetXY(15,160);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->SetXY(15,168);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);
$pdf->Cell(55,8,'',1,0,'L',0);


$pdf->Output();
?>
