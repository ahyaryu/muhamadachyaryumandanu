<?php
include 'ceki.php';
$idw = $_GET["idu"];
$wee = mysqli_query($qw,"DELETE FROM masyarakat WHERE nik = '$idw'");
if($wee){
    header("Location:daftar-masyarakat.php?pesan=suksesi");
    exit;
}else{
    header("Location:daftar-masyarakat.php?pesan=gagal1");
    exit;
}

?>