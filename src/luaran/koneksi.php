<?php
$koneksi = mysqli_connect("localhost","root","","simapres");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>
