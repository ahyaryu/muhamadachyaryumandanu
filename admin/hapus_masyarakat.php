<?php
include 'ceki.php';

$nik = mysqli_real_escape_string($qw, $_GET['idu']);

mysqli_query($qw, "DELETE FROM tanggapan WHERE nik='$nik'");
// 1. Hapus dulu semua laporan (pengaduan)
mysqli_query($qw, "DELETE FROM pengaduan WHERE nik='$nik'");

// 2. Baru hapus masyarakat
$query = mysqli_query($qw, "DELETE FROM masyarakat WHERE nik='$nik'");


if($query){
    header("location:daftar-masyarakat.php?pesan=suksesi");
} else {
    header("location:daftar-masyarakat.php?pesan=gagal1");
}
?>