<?php 
include('../luaran/koneksi.php');
if (isset($_POST['submit'])){
$id = '';
$nama = $_POST['nama'];
$bidang = $_POST['bidang'];
$jenis_prestasi = $_POST['jenis_prestasi'];
$nama_perlombaan= $_POST['nama_perlombaan'];
$kategori= $_POST['kategori'];
$judul_karya = $_POST['judul_karya'];
$tanggal = isset($_POST['tanggal']) ? '' : '';
$link_informasi = $_POST['link_informasi'];
$lokasi= $_POST['lokasi'];
$tahun= $_POST['tahun'];
$jumlah_anggota = $_POST['jumlah_anggota'];
$nama_lembaga_ormawa = $_POST['nama_lembaga_ormawa'];
$program = $_POST['program'];
$tingkat = $_POST['tingkat'];
$jenis_kepesertaan = $_POST['jenis_kepesertaan'];
$capaian= $_POST['capaian'];
$jumlah_peserta = $_POST['jumlah_peserta'];
$jumlah_pt = $_POST['jumlah_pt'];
$jumlah_provinsi = $_POST['jumlah_provinsi'];
$jenis_negara = $_POST['jumlah_negara'];
$nama_dosen_pembimbing= $_POST['nama_dosen_pembimbing'];
$no_wa_mahasiswa= $_POST['no_wa_mahasiswa'];
$surat_dosen = $_POST['surat_dosen'];
$bukti_prestasi = $_POST['bukti_prestasi'];
$sql = "insert into prestasi values ('$id', '$nama', '$bidang', '$jenis_prestasi', '$nama_perlombaan', '$kategori','$judul_karya',
      '$tanggal', '$link_informasi',
      '$lokasi', '$tahun', '$jumlah_anggota', '$nama_lembaga_ormawa', '$program', '$tingkat',
      '$jenis_kepesertaan', '$capaian', '$jumlah_peserta', '$jumlah_pt', '$jumlah_provinsi',
      '$jenis_negara', '$nama_dosen_pembimbing', '$no_wa_mahasiswa', '$surat_dosen', '$bukti_prestasi')";
      
      mysqli_query($koneksi, $sql);
header("Location:prestasi.php?notif=tambahberhasil");	
			// }
}
?>