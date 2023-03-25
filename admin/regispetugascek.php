
<!-- registrasi petugas -->
<?php
global $qw;
if (isset($_POST["submi"])) {
    $nama= $_POST["nama"];
    $username= $_POST["username"];
    $password= $_POST["password"];
    $conf= $_POST["conf"];
    $telp= $_POST["telp"];
    $level="petugas";
    if($password !== $conf){
        header("Location:registrasi.php?pesan=gagal2");
        exit;
    }else{

    $passwor =  password_hash($password, PASSWORD_DEFAULT);
    $qwe = mysqli_query($qw, "INSERT INTO petugas VALUES('','$nama','$username','$passwor','$telp','$level')");
    if(mysqli_affected_rows($qw)>0){
        header("Location:registrasi.php?pesan=sukses");
        exit;
    }else{
        header("Location:registrasi.php?pesan=gagal3");
        exit;
    }   
    }
}
?>
