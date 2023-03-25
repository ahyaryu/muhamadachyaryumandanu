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
    <!-- row luar-->
    <div class="row justify-content-center">
    <div class="col-xl-5">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- row bagian dalam -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block "></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                  </div>
                  <form class="user" action="logincek1.php" method="post">
                    <div class="form-group">
                      <input type="text" name="user" class="form-control form-control-user" placeholder="Masukan Username" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" class="form-control form-control-user"placeholder="Password" id="myPassword" required>
                    </div>          
                    <div class="form-group">
                      <!-- /.col -->
                      <div class="">
                        <input type="checkbox" onclick="myFunction()"> Lihat Password <br>
                      </div>
                    </div>
                        <button type="submit" name="kirim" class="btn btn-primary btn-user btn-block">login</button>
                    <hr>
                    <div class="text-center">
                    Belum Punya Akun??
                    <br>
                    <a class="small" href="registrasi.php">registrasi</a>
                  </div>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
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
if ($pesan=="gagal"){
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
      title: 'Username Atau Password Salah'
  });

</script>

<?php
}
if ($pesan=="sukses"){
?>

<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'success',
      title: 'Profil Telah Terdaftar'
  });

</script>

<?php
}
?>

</body>

</html>
