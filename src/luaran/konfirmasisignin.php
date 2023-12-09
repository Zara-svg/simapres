<?php
    //akses file koneksi database
    include('../luaran/koneksi.php');

    
    session_start();
$_SESSION['id_user'] = 'id_user';
$_SESSION['level'] = 'admin';
print_r($_SESSION);

    

    if (isset($_POST['login'])) 
        $aktor = $_POST['email'];
        $pass = $_POST['password'];
        $email = mysqli_real_escape_string($koneksi, $aktor);
        $password = mysqli_real_escape_string($koneksi, $pass);
        //cek username dan password
        $sql="select id_user, level from aktor 
                where email='$aktor' and
               password='$password'";
        $query = mysqli_query($koneksi, $sql);
        $jumlah = mysqli_num_rows($query);
        if(empty($aktor)){
            header("Location:signin.php?gagal=emailKosong");
        }else if(empty($pass)){
            header("Location:signin.php?gagal=passKosong");
        }else if($jumlah==0){
            header("Location:signin.php?gagal=userpassSalah");
        }else{

       
        
            //get data
            if ($jumlah>0) {
				$row = mysqli_fetch_assoc($query);
				$_SESSION["id_user"]=$row["id_user"];
				$_SESSION["username"]=$row["username"];
				$_SESSION["nama"]=$row["nama"];
				$_SESSION["email"]=$row["email"];
				$_SESSION["level"]=$row["level"];
		
		
                if ($_SESSION["level"]=$row["level"]=="admin")
				{
					header("Location:../admin/admindashboard.php");
				} else if ($_SESSION["level"]=$row["level"]=="user")
				{
					header("Location:../user/index.php");
				}else if ($_SESSION["id_user"]=$row["id_user"]=="user"){
					header("Location:../user/index.php");
				}   
        }
        }
        ?>