<?php
 if (isset($_GET['pesan']))
 {
    $pesan=$_GET['pesan'];
 }
 else
 {
    $pesan="";
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Adukan.Ini</title>

  <link rel="icon" type="image/x-icon" href="img/logo.png" />

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>

<body class="" style="background-image: url('img/batman.jpg'); ;">

  <div class="container">

  <div class="row justify-content-center">
  <div class="col-xl-6 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12 d-none d-lg-block"></div>
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registrasi</h1>
              </div>
              <form class="user" action="regis1.php" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nik" class="form-control form-control-user" placeholder="NIK" pattern="[0-9]{16}$" maxlength="16" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama" required>
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="telp" class="form-control form-control-user" placeholder="Nomor Tlp" pattern="(\+62|62|0)8[1-9][0-9]{6,9}$" maxlength="13" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="conf" class="form-control form-control-user" placeholder="konfirmasi password" required>
                  </div>
                </div>
                <hr>
                <button type="submit" name="submit" class="btn btn-success btn-user btn-block">kirim</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Sudah punya akun? login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- SweetAlert2 -->
<script src="admin/plugins/sweetalert2/sweetalert2.min.js"></script>
    <?php
//ambil nilai variabel error
if ($pesan=="gagal-nik"){
?>

<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'error',
      title: 'NIK harus 16 digit'
  });

</script>

<?php
}
if ($pesan=="gagal-pass"){
?>

<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'error',
      title: 'Password berbeda'
  });

</script>

<?php
}
if ($pesan=="gagal-telp"){
?>

<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'error',
      title: 'Nomor telpon anda aneh'
  });

</script>

<?php
}
if ($pesan=="gagal-kirim"){
?>

<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'error',
      title: 'Data Gagal Terkirim'
  });

</script>

<?php
}
if ($pesan=="nama"){
?>

<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'error',
      title: 'NIK atau Username Sudah Terdaftar'
  });

</script>

<?php
}
?>
</body>

</html>
