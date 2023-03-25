
<!-- update Laporan-->
<?php 
include "cek.php";

if(isset($_POST["dante"])){
    
    $id=$_POST["id"];
	$isi=$_POST["isi_laporan"];
    $bku= $_POST["uku"];
    $x=$_POST['x'];
    $foto=$_FILES['foto']['tmp_name'];
    $foto_name=$_FILES['foto']['name'];
    $acak= rand(1,99);
    $tujuan_foto = $acak.$foto_name;
    $tempat_foto = 'img/'.$tujuan_foto;
           
    if (!$foto==""){
        $buat_foto=$tujuan_foto;
        $d = 'img/'.$x;
        @unlink ("$d");
        copy ($foto,$tempat_foto);
    }else{
        $buat_foto=$x;
    }
    mysqli_query($qq," UPDATE pengaduan SET 
                tentang = '$bku',
                isi_laporan ='$isi',
                foto ='$buat_foto'
                where id_pengaduan='$id'");

if(mysqli_affected_rows($qq)>0){
    header("location:masyarakat.php?url=lihat-laporan&&pesan=ul-betul");
    exit;
}else{
    header("location:masyarakat.php?url=lihat-laporan&&pesan=ul-salah");
    exit;
}
}
?>
