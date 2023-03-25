
<!-- update user-->
<?php 
include "cek.php";

if(isset($_POST["dtt"])){
    
	$nik=$_POST["nik"];
	$nama= $_POST["nama"];
	$telp= $_POST["telp"];
	$username = $_POST["username"];

mysqli_query($qq," UPDATE masyarakat SET 
                nama ='$nama',
                telp ='$telp',
                username='$username'
                where nik='$nik' ");
if(mysqli_affected_rows($qq)>0){
    header("location:masyarakat.php?url=tulis-laporan&&pesan=uu-sukses");
    exit;
}else{
    header("location:masyarakat.php?url=tulis-laporan&&pesan=uu-gagal");
    exit;
}
}
?>

