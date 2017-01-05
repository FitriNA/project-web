<?php
include 'fungsi/koneksi.php';
require('lib/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('lib/css/images/logo.png',1.1,0.5,2.7,2.7);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'PERPUZ',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 0852XXXXXXXX',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. Mastrip, Tegalbesar, Sumbersari, Kabupaten Jember, Jawa Timur 68124',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.perpuz.hol.es email : perpuz@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Buku",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'ID Buku', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Judul', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Jenis', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'ISBN', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Penulis', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Penerbit', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Thn Terbit', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Jml Buku', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Rak Buku', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Tgl Masuk', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("select * from buku");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['id_buku'],1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['judul'], 1, 0,'C');
	$pdf->Cell(2, 0.8, $lihat['jenis'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['isbn'], 1, 0,'C');
	$pdf->Cell(2, 0.8, $lihat['penulis'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['penerbit'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $lihat['thn_terbit'], 1, 0,'C');
	$pdf->Cell(2, 0.8, $lihat['jml_buku'],1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['rak_buku'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $lihat['tgl_entry'], 1, 1,'C');

	$no++;
}

$pdf->Output("lap_buku.pdf","I");

?>

