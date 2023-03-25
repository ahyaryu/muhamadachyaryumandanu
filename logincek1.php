<!-- login-->
<?php
include "cek.php";
if(isset($_POST["kirim"])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
 
    $hasil = mysqli_query($qq, "SELECT * FROM masyarakat WHERE username ='$user'");
    if(mysqli_num_rows($hasil)===1){
        $asc = mysqli_fetch_assoc($hasil);
        $nik = $asc["nik"];
        $nama = $asc["nama"];
        $telp = $asc["telp"];
        if(password_verify($pass, $asc["password"])){
            session_start();
            $_SESSION["username"] = $user;
            $_SESSION["nik"]=$nik;
            $_SESSION["nama"]=$nama;
            $_SESSION["telp"]=$telp;
            $_SESSION["status"] = "login";
            header("location:masyarakat.php?pesan=login");
            exit;
        }else{
            header("location:login.php?pesan=gagal");
                exit;
        }
    }else{
        header("location:login.php?pesan=gagal");
            exit;
    }
}
?>