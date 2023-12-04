<?php 
session_start();
include('../luaran/koneksi.php');
if(isset($_SESSION['id_user'])){
  $id_user = $_SESSION['id_user'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $level = $_POST['level'];
 
   if(empty($nama)){
       header("Location:adminedit.php?data=".$id_user."&notif=editkosong");
  }else{
	$sql = ("UPDATE aktor SET nama='$nama', email='$email', password='$password', level='$level' WHERE id_user='$id_user'");
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_user']);
	header("Location:adminakses.php?notif=editberhasil");
  }
}
?>