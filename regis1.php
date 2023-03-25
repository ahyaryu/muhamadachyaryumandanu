
<!-- registrasi -->
<?php
include "cek.php";
if (isset($_POST["submit"])) {
    $nik= $_POST["nik"];
    $nama= $_POST["nama"];
    $telp= $_POST["telp"];
    $username= $_POST["username"];
    $password= $_POST["password"];
    $conf= $_POST["conf"];
    if(strlen($nik)!=16){
        header("location:registrasi.php?pesan=gagal-nik");
        exit;
    }elseif($password !== $conf){
        header("location:registrasi.php?pesan=gagal-pass");
        exit;
    }elseif((strlen($telp)<=9) OR (strlen($telp)>=15)){
        header("location:registrasi.php?pesan=gagal-telp");
        exit;
    }else{
    $cek = mysqli_query($qq, "SELECT * FROM masyarakat WHERE username='$username' OR nik = '$nik'");
    if(mysqli_num_rows($cek) == 0){
        $passwor =  password_hash($password, PASSWORD_DEFAULT);
        $qwe = mysqli_query($qq, "INSERT INTO masyarakat VALUES('$nik','$nama','$telp','$username','$passwor')");
        if(mysqli_affected_rows($qq)>0){
            header("location:login.php?pesan=sukses");
            exit;
        }else{
            header("location:registrasi.php?pesan=gagal-kirim");
            exit;
        }
    }else{
        header("location:registrasi.php?pesan=nama");
        exit;
    }
}
}
?>
