<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    /*$this->Image('logo.png',10,8,33);*/
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Ventas',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    $this->Cell(10,10,'ID',1,0,'C',0);
    $this->Cell(40,10,'Cliente',1,0,'C',0);
    $this->Cell(40,10,'Total',1,0,'C',0);
    $this->Cell(60,10,'Fecha de venta',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}


require 'cn.php';
$consulta = "SELECT * FROM venta";
$resultado = $mysqli->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages(); 
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while ($row = $resultado->fetch_assoc()){

    $pdf->Cell(10,10,$row['id'],1,0,'C',0);
    $pdf->Cell(40,10,$row['id_clientes'],1,0,'C',0); //agregar name en ventas//
    $pdf->Cell(40,10,$row['total'],1,0,'C',0);
    $pdf->Cell(60,10,$row['created_at'],1,1,'C',0);
}

$pdf->Output();



?>