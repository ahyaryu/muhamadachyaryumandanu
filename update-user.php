<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                <h1 class="h4 text-gray-900 mb-4">Update</h1>
              </div>
              <form class="user" action="updateusercek.php" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>NIK</label>
                    <input type="number" name="nik" class="form-control form-control-user" value="<?= $tik?>" required>
                  </div>
                  <div class="col-sm-6">
                  <label>Nama Pengguna</label>
                    <input type="text" name="nama" class="form-control form-control-user"  value="<?=  $tes ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Nomor Telepon</label>
                    <input type="text" name="telp" class="form-control form-control-user"value="<?= $lp ?>"  pattern="(\+62|62|0)8[1-9][0-9]{6,9}$" maxlength="13"  required>
                  </div>
                  <div class="col-sm-6">
                  <label>Username</label>
                    <input type="text" name="username" class="form-control form-control-user" value="<?= $us ?>" required>
                  </div>
                </div>
                <hr>
                <button type="submit" name="dtt" class="btn btn-success btn-user btn-block">update</button>
                <hr>
              <div class="text-center">
                <a class="small" href="masyarakat.php">kembali</a>
              </div>
              </form>
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

</body>

</html>
