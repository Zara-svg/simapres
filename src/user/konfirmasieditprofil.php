<?php 
session_start();
include('../luaran/koneksi.php');
if(isset($_SESSION['id_user'])){
	$id_user = $_SESSION['id_user'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$foto = $_POST['foto'];
 
    //get foto 
    $foto = $_FILES['foto']['name'];
    $extension = strtolower(substr($foto, strpos($foto, '.') + 1));
    $type = $_FILES['foto']['type'];

    $size = $_FILES['foto']['size'];
    $max_size = 2097152;
    $tmp_name = $_FILES['foto']['tmp_name'];
        //echo $foto;
    }
 
	if(empty($nama)){
	    header("Location:editprofil.php?notif=editkosong&jenis=nama");
	}else if(empty($email)){
	    header("Location:editprofil.php?notif=editkosong&jenis=email");

	}else{
		if (($extension = 'jpg' || $extension=='png' || $extension=='jpeg') && ($type=='image/jpg' || $type=='image/png' || $type=='image/jpeg') && $size <= $max_size) {
			$location = 'gambar/';
			if (move_uploaded_file($tmp_name, $location.$foto)){
                  }
		   $sql = "update aktor set nama='$nama', 
                  email='$email', foto='$nama_file' 
                  where id_user='$id_user'";
                  //echo $sql;
		   mysqli_query($koneksi,$sql);
		}else{
		   $sql = "update aktor set nama='$nama', email='$email' 
                  where id_user='$id_user'";
                  //echo $sql;
		   mysqli_query($koneksi,$sql);
		}
      	    header("Location:profil.php?notif=editberhasil");
	}

 
?>