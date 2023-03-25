
<!-- masukin tanggapan -->
<?php
include "ceki.php";
if (isset($_POST["tuggas"])) {
    $tgl= $_POST['gal'];
    $idad= $_POST['id'];
    $idt= $_POST['idt'];
    $tangga= $_POST['tanggapan'];
    $tugas= $_POST['tugas'];
    mysqli_query($qw, "UPDATE tanggapan SET tgl_tanggapan = '$tgl', tanggapan = '$tangga' WHERE id_tanggapan = '$idt'");
    mysqli_query($qw, "UPDATE pengaduan SET status = 'selesai' WHERE id_pengaduan ='$idad'");
    if(mysqli_affected_rows($qw)>0){
        header("Location:Tanggapan.php?pesan=suk");
         exit;
    }else{
        header("Location:Tanggapan.php?pesan=sukses");
         exit;
    }
}
?>
