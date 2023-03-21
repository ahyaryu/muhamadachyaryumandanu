<?php
session_start();
if ($_SESSION["status"] !== "login") 
{
  header("Location:index.php");
}
$username=$_SESSION["userna"];
$nama = $_SESSION["nama"];
$level=$_SESSION["level"];


if (isset($_GET['pesan']))
{
   $pesan=$_GET['pesan'];
}
else
{
   $pesan="";
}

//memasukkan file config.php
include('ceki.php');

$id = $_GET["id"];
$petugas_update = mysqli_query($qw,"SELECT * FROM petugas WHERE id_petugas = '$id'");


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adukan.Ini | Update Petugas</title>
  <link rel="icon" type="image/x-icon" href="../img/logo.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <span class="fas fa-clock"></span><b> perbarui</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Perbarui data diri petugas</p>

          <?php
            while($gg = mysqli_fetch_assoc($petugas_update)){
          ?>
        <form class="user" action="ceki.php" method="post">
          <input type="hidden" name="idpetugas" value="<?= $gg['id_petugas']; ?>">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="namanya" class="form-control form-control-user" placeholder="Nama pengguna" value="<?= $gg['nama_petugas'];?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="usern" class="form-control form-control-user" placeholder="username" value="<?= $gg['username'];?>"  >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="pas" class="form-control form-control-user" placeholder="masukan password" >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="config" class="form-control form-control-user" placeholder="konfirmasi password" >
                  </div>
                </div>
                <hr>
            <button type="submit" name="sub" class="btn btn-primary btn-user btn-block">perbarui</button>
          </form>
          <?php } ?>
          <a href="beranda.php">
          <button class="btn btn-alert btn-user btn-block">Gajadi, kembali aja</button>
          </a>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script>
   function myFunction() {
   var x = document.getElementById("myPassword");
   if (x.type === "password") {
     x.type = "text";
   } else {
     x.type = "password";
    }
   }
  </script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<?php
if ($pesan=="gagal1"){
?>
<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'error',
      title: 'password berbeda'
  });

</script>
<?php
}

if ($pesan=="gagal2"){
?>
<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'error',
      title: 'data gagal di perbarui'
  });

</script>
<?php
}
?>

</body>
</html>
