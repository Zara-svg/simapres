<?php 
include("koneksiuser.php");

function read($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    if ($result == null) {
        $rows[] = [];
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }

    return $rows;
}



function validateUpdate($id_prestasi, $nama)
{
    global $conn;
    $query = "SELECT * FROM prestasi WHERE nama = '$nama'";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $query));
    if ($result == null) {
        return true;
    } else if ($result["nama"] == $nama && $result["id_prestasi"] == $id_prestasi) {
        return true;
    } else {
        return false;
    }
}

function update($id_prestasi, $nama, $nama_perlombaan, $tahun)
{
    global $conn;
    if (validateUpdate($id_prestasi, $nama)) {
        $query = "UPDATE prestasi SET 
                nama = '$nama',
                nama_perlombaan = '$nama_perlombaan',
                tahun = '$tahun'
             
                WHERE id_prestasi = '$id_prestasi'
            ";
        mysqli_query($conn, $query);
        if (mysqli_error($conn) == null) {
            echo "<script> alert('Data berhasil diupdate!'); document.location.href = 'adminprestasi.php'; </script>";
        } else {
            print(mysqli_error($conn));
        }
    } else {
        echo "<script> alert('Akun telah terdaftar!'); document.location.href = 'adminprestasi.php'; </script>";
    }
}
?>