<?php 
// Koneksi MySQLi (Prosedural)

define("HOST",     "localhost");
define("USER",     "root"); 
define("PASSWORD", "");
define("DATABASE", "ajax");
 
$koneksi = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
 
if (mysqli_connect_errno()) {
  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
}
?>
