
<!-- update user-->
<?php 
global $qq;
if(isset($_POST["sub"])){
    
    
	$idany=$_POST["idpetugas"];
	$nama=$_POST["namanya"];
	$user= $_POST["usern"];
	$pas = $_POST["pas"];
	$kon = $_POST["config"];

    if($pas !== $kon){
        header("Location:update.php?pesan=gagal1&&id=$idany");
        exit;
    }else{
        $passwo =  password_hash($pas, PASSWORD_DEFAULT);
        mysqli_query($qw," UPDATE petugas SET 
                    nama_petugas ='$nama',
                    username='$user',
                    password ='$passwo'
                    where id_petugas='$idany' ");
        if(mysqli_affected_rows($qw)>0){
            header("Location:registrasi.php?pesan=sukses2");
            exit;
        }else{
            header("Location:update.php?pesan=gagal2");
            exit;
        }
    }
}
?>



