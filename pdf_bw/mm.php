<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'LUXURY',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PEMBELI LUXURY HOUSE',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'Nama',1,0);
$pdf->Cell(85,6,'Jumlah Beli',1,0);
$pdf->Cell(27,6,'Harga',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$customer = mysqli_query($connect, "select * from customer");
while ($row = mysqli_fetch_array($customer)){
    $pdf->Cell(50,6,$row['nama'],1,0);
    $pdf->Cell(85,6,$row['jumlah'],1,0);
    $pdf->Cell(27,6,$row['harga'],1,1);
}

$pdf->Output();
?>
