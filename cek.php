<?php
 $qq= mysqli_connect("localhost","root","","pengaduan-msyrakt");
?>

<!-- login-->
<?php
global $qq;
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

<!-- registrasi -->
<?php
global $qq;
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

<!-- laporan masyarakat -->
<?php
global $qq;
if (isset($_POST["send"])) {
    $tgl= $_POST['tgl_pengaduan'];
    $nik= $_POST['nik'];
    $isi= $_POST['isi_laporan'];
    $foto= $_FILES['gbr']['name'];
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
<!-- update user-->
<?php 
global $qq;

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


<!-- update Laporan-->
<?php 
global $qq;

if(isset($_POST["dante"])){
    
    $id=$_POST["id"];
	$isi=$_POST["isi_laporan"];
	$foto= $_FILES['foto']['name'];
    $flie= $_FILES['foto']['tmp_name'];
	
    move_uploaded_file($flie,"img/".$foto);
mysqli_query($qq," UPDATE pengaduan SET 
                isi_laporan ='$isi',
                foto ='$foto'
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
