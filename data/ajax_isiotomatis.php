<?php
include "koneksi2.php";
$query = mysqli_query($koneksi, "SELECT * from barang where ID='$_GET[ID]'");
$kuku = mysqli_fetch_array($query);
$data = array( 'ID'     =>  $kuku['ID'],
			   'Tipe'     =>  $kuku['Tipe'],
			   'Peminat' =>  $kuku['Peminat'],
			   'Harga'   =>  $kuku['Harga']	);
 echo json_encode($data);
?>