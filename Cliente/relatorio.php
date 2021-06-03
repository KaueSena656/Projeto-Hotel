<?php
	require 'fpdf/fpdf.php';


class PDF extends FPDF{
	// Page header
function Header()
{
	$l = 5;
	$this->SetXY(10, 10);
	$this->Rect(10, 10, 190, 40);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    // $this->Cell(80);
    // Title
    $this->Cell(190,20, utf8_decode('Comprovante'),1,0,'C');
    // Line break
    $this->Ln();

    $l = 5;
    $this->SetFillColor(232, 233, 232);
    $this->SetTextColor(0, 0, 0);
    $this->SetFont('Arial', 'B', 8);
    $this->Cell(47.5, $l, utf8_decode('Código de verificação'), 1, 0, 'C', 1);
    $this->Cell(47.5, $l, utf8_decode('Nome'), 1, 0, 'C', 1);
    $this->Cell(47.5, $l, utf8_decode('Data de início'), 1, 0, 'C', 1);
    $this->Cell(47.5, $l, utf8_decode('Dada do fim'), 1, 0, 'C', 1);
}
function Footer(){
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}
include '../conexao/conexao.php';
	$pdf = new PDF();
	$pdf->AliasNbPages(); 
	$pdf->AddPage();
	$pdf->SetFont('Times','',12);

	$y = 37;

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

	$sql = "SELECT id, nome, in_reserva, fim_reserva  FROM reserva WHERE id = '{$id}'";
	$resultado = mysqli_query($conn, $sql);
	$l = 5;
	while ($row = mysqli_fetch_array($resultado)) {
		$id = utf8_decode($row['0']);
		$nome = utf8_decode($row['1']);
		$di = utf8_decode($row['2']);
		$di = utf8_decode($row['3']);

		$pdf->SetY($y);
		$pdf->SetX(30);
		$pdf->Rect(10, $y, 0, $l);
		$pdf->MultiCell(51,6, $id,0,5);


		$pdf->SetY($y);
		$pdf->SetX(57.5);
		$pdf->Rect(0, $y, 0, $l);
		$pdf->MultiCell(51,5, $nome, 0, 5);

		$pdf->SetY($y);
		$pdf->SetX(110.5);
		$pdf->Rect(0, $y, 0, $l);
		$pdf->MultiCell(51,4, $di, 0, 45);

		$pdf->SetY($y);
		$pdf->SetX(156);
		$pdf->Rect(0, $y, 0, $l);
		$pdf->MultiCell(51,4, $di, 0, 45);

		$y += $l;
	}

}
	$pdf->Output();

?>