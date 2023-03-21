<?php
include 'ceki.php';
$idw = $_GET["idu"];
$wee = mysqli_query($qw,"DELETE FROM petugas WHERE id_petugas = '$idw'");
if($wee){
    header("Location:registrasi.php?pesan=suksesi");
    exit;
}else{
    header("Location:registrasi.php?pesan=gagal1");
    exit;
}

?>