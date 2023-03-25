
<!-- verifikasi -->
<?php
include "ceki.php";
if(isset($_POST['gagal'])){
    $id = $_POST['id'];
    $tgl= date('Y-m-d');
    $tanggap= $_POST['tanggapan'];
    $tugas= $_POST['tugas'];
    if($tanggap == ""){
        header("Location:verifikasi.php?pesan=gagal1");
        exit;
    }else{
     $sql=mysqli_query($qw, "UPDATE pengaduan SET status = 'tolak' WHERE id_pengaduan ='$id'");
     $sql=mysqli_query($qw, "INSERT INTO tanggapan VALUES('','$id','$tgl','$tanggap','$tugas')");
     if($sql){
         header("Location:verifikasi.php?pesan=suksess");
         exit;
     }else{
        header("Location:verifikasi.php?pesan=gagal2");
        exit;
     }
    }
}
if(isset($_POST['sukses'])){
    $id = $_POST['id'];
    $tgl= date('Y-m-d');
    $tanggap= 'laporan anda sedang di proses oleh petugas';
    $tugas= $_POST['tugas'];
     $sql=mysqli_query($qw, "UPDATE pengaduan SET status = 'proses' WHERE id_pengaduan ='$id'");
     $sql=mysqli_query($qw, "INSERT INTO tanggapan VALUES('','$id','$tgl','$tanggap','$tugas')");
     if($sql){
         header("Location:verifikasi.php?pesan=sukses");
         exit;
     }else{
        header("Location:verifikasi.php?pesan=gagal2");
         exit;
     }
}
?>




