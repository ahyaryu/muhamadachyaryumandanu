<?php
$qw = mysqli_connect("localhost","root","","pengaduan-msyrakt");
?>

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

<!-- login -->
<?php
global $qw;
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

<!-- verifikasi -->
<?php
global $qw;
if(isset($_POST['gagal'])){
    $id = $_POST['id'];
    $tgl= date('Y-m-d');
    $tanggap= $_POST['tanggapan'];
    $tugas= $_POST['tugas'];
    if($tanggap == ""){
        header("Location:verifikasi.php?pesan=gagal1");
        exit;
    }else{
     $sql=mysqli_query($qw, "UPDATE pengaduan SET status = 'tolak' WHERE id_pengaduan ='$id'");
     $sql=mysqli_query($qw, "INSERT INTO tanggapan VALUES('','$id','$tgl','$tanggap','$tugas')");
     if($sql){
         header("Location:verifikasi.php?pesan=suksess");
         exit;
     }else{
        header("Location:verifikasi.php?pesan=gagal2");
        exit;
     }
    }
}
if(isset($_POST['sukses'])){
    $id = $_POST['id'];
    $tgl= date('Y-m-d');
    $tanggap= 'laporan anda sedang di proses oleh petugas';
    $tugas= $_POST['tugas'];
     $sql=mysqli_query($qw, "UPDATE pengaduan SET status = 'proses' WHERE id_pengaduan ='$id'");
     $sql=mysqli_query($qw, "INSERT INTO tanggapan VALUES('','$id','$tgl','$tanggap','$tugas')");
     if($sql){
         header("Location:verifikasi.php?pesan=sukses");
         exit;
     }else{
        header("Location:verifikasi.php?pesan=gagal2");
         exit;
     }
}
?>






<!-- masukin tanggapan -->
<?php
global $qw;
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



