
<!-- login -->
<?php
include "ceki.php";
if(isset($_POST["kiri"])){
    $user = $_POST['users'];
    $pass = $_POST['passe'];
 
    $hasil = mysqli_query($qw, "SELECT * FROM petugas WHERE username ='$user'");
    if(mysqli_num_rows($hasil)===1){
        $asc = mysqli_fetch_assoc($hasil);
        $nama = $asc["nama_petugas"];
        if(password_verify($pass, $asc["password"])){
            session_start();
            $_SESSION["userna"] = $user;
            $_SESSION["nama"]=$nama;
            $_SESSION["ino"]=$asc["id_petugas"];
            $_SESSION["level"]=$asc["level"];
            $_SESSION["status"] = "login";
            header("location:beranda.php?pesan=sukses");
            exit;
        }else {
            header("Location:index.php?pesan=gagal");
            exit;
            }
    }else {
        header("Location:index.php?pesan=kesalahan");
        exit;
    }
}
?>
