<?php
session_start();
if ($_SESSION["status"] !== "login")  
{
  header("Location:index.php");
}
$username=$_SESSION["userna"];
$nama=$_SESSION["nama"];
$ide=$_SESSION["ino"];
$level=$_SESSION["level"];

if (isset($_GET['pesan']))
{
   $pesan=$_GET['pesan'];
}
else
{
   $pesan="";
}

if($level=='petugas'){
    header("location:beranda.php");
}

include "ceki.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adukan.Ini | Registrasi</title>
  <link rel="icon" type="image/x-icon" href="../img/logo.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="beranda.php" class="nav-link">Beranda</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user-circle"></i> Profil
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            Saat ini Anda bertindak sebagai <b><?php echo $nama; ?></b>
          </a>
          <a href="logout.php" class="dropdown-item dropdown-footer"><button type="button" class="btn btn-block bg-gradient-danger"><i class="far fa-user-circle"></i> Logout</button></a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php
    if($level == "admin"){
    ?>
    <a href="#" class="brand-link" align="center">
      <i class="fas fa-user"></i>
      <span class="brand-text font-weight-light">Halaman Admin</span>
    </a>
<?php
    }else{?>
      <a href="#" class="brand-link" align="center">
      <i class="fas fa-user-tie"></i>
      <span class="brand-text font-weight-light">Halaman petugas</span>
    </a>
    <?php }?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user4-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nama; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="beranda.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="verifikasi.php" class="nav-link">
              <i class="nav-icon fas fa-check-circle"></i>
              <p>
                Verifikasi Laporan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="Tanggapan.php" class="nav-link">
              <i class="nav-icon fas fa-pen-alt"></i>
              <p>
              Tanggapan
              </p>
            </a>
          </li>
          <?php
          if($level == 'admin'){
          ?>
          <li class="nav-item has-treeview">
            <a href="generate.php?sort=all&&shorting=all" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Generate Laporan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="daftar-masyarakat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Masyarakat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="registrasi.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Petugas</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row justify-content-center">
        <!-- Small boxes (Stat box) -->
        <div class="col-6 ">

          <!-- registrasi -->
          <div class="card">
            <!-- /.card-header -->
            <!-- card body -->
            <div class="card-body">
              <form class="user" action="ceki.php" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="number" name="telp" class="form-control form-control-user" placeholder="Nomor Tlp" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
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
                <button type="submit" name="submi" class="btn btn-success btn-user btn-block">kirim</button>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- Daftar petugas -->
          <div class="card">
            <!-- card header -->
            <div class="card-header">
              <div class="row mb-2">
                <div class="col-sm-12">
                  <form class="input-group rounded col-4" action="" method="get">
                <input type="search" class="form-control rounded" placeholder="cari" name="cari" aria-label="Search" aria-describedby="search-addon" />
                <button type="submit"  class="input-group-text border-0" id="search-addon">
                  <i class="fas fa-search"></i>
                </button>
              </form>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Telepon</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($_GET['cari'])){
                  $cari = $_GET['cari'];
                  $dat = mysqli_query($qw,"SELECT * FROM petugas WHERE id_petugas like '%$cari%' OR nama_petugas like '%$cari%' OR username like '%$cari%' AND level='petugas'");				
                  }else{
                $dat = mysqli_query($qw, "SELECT * FROM petugas WHERE level='petugas'");
                  }
                $no = 1;
                while ($data = mysqli_fetch_assoc($dat)) 
                {
                ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['id_petugas']; ?></td>
                      <td><?php echo $data['nama_petugas']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['telp']; ?></td>
                      <td>
                        <a href="#" type="button" class="badge badge-danger" data-toggle="modal" data-target="#hapus-modal" title="hapus"><i class="fas fa-trash"></i>hapus</a>
                        <a href="update.php?id=<?php echo $data['id_petugas']; ?>" type="button" class="badge badge-primary" title="hapus"><i class="fas fa-arrow-up"></i>update</a>
                      </td>
                    </tr>

                    <div class="modal fade" id="hapus-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">hapus</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">x</span>
                            </button>
                          </div>
                          <div class="modal-body">Apakah yakin mau di hapus?</div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">tidak</button>
                            <a class="btn btn-primary" href="hapus.php?idu=<?php echo $data['id_petugas']; ?>">iya</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php
                }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
        
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<?php
//ambil nilai variabel error
if ($pesan=="sukses"){
?>

<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'success',
      title: 'petugas telah terdaftar'
  });

</script>

<?php
}

if ($pesan=="sukses2"){
?>

<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'success',
      title: 'petugas telah berhasil di perbarui'
  });

</script>
<?php
}
if ($pesan=="suksesi"){

?>
<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'success',
      title: 'petugas berhasil di hapus'
  });

</script>
<?php
}

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
      title: 'petugas tidak terhapus'
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
      title: 'password berbeda'
  });

</script>

<?php
}

if ($pesan=="gagal3"){
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
      title: 'petugas tidak terdaftar'
  });

</script>
<?php
}
?>

</body>
</html>
