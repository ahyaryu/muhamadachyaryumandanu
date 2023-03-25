
<!-- laporan masyarakat -->
<?php
include "cek.php";
if (isset($_POST["send"])) {
    $tgl= $_POST['tgl_pengaduan'];
    $nik= $_POST['nik'];
    $isi= $_POST['isi_laporan'];
    $foto= rand(1,99).$_FILES['gbr']['name'];
    $flie= $_FILES['gbr']['tmp_name'];
    $st=0;
    $bku= $_POST["uku"];
    
    if($bku == "pilih"){
        header("location:masyarakat.php?url=tulis-laporan&&pesan=lap-kosong");
        exit;
    }else{
    mysqli_query($qq, "INSERT INTO pengaduan VALUES('','$tgl','$nik','$bku','$isi','$foto','$st')");
    move_uploaded_file($flie,"img/".$foto);
    if(mysqli_affected_rows($qq)>0){
        header("location:masyarakat.php?url=lihat-laporan&&pesan=lap-sukses");
        exit;
    }else{
        header("location:masyarakat.php?url=tulis-laporan&&pesan=lap-gagal");
        exit;
    }
    }
}
?>