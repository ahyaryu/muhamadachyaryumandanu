<?php
session_start();
if ($_SESSION["status"] !== "login") 
{
  header("Location:index.php");
}
$username=$_SESSION["userna"];
$nama=$_SESSION["nama"];
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

//memasukkan file config.php
include('ceki.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adukan.Ini | Generate Laporan</title>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../css/asd.css">
  <style>
    @media print{
      .card-header{
        display: none;
      }
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

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
            <a href="generate.php?sort=all&&shorting=all" class="nav-link active">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Generate Laporan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
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
                <a href="registrasi.php" class="nav-link">
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
      
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- Small boxes (Stat box) -->
        <div class="col-12">
          <div class="card">
            <!-- card header -->
            <div class="card-header">
              <div class="row mb-2">
                  <form class="input-group col-8" action="" method="get">
                    <div class="col-12 col-md-4 col-lg-4">
                      <select class="form-control form-control-sm" name="sort">
                        <option value="all" >Filter berdasarkan</option>
                        <option value="sampah">sampah</option>
                        <option value="jalan">jalan</option>
                        <option value="air">air</option>
                        <option value="warga">warga</option>
                      </select>
                    </div>
                    <div>
                    <select class="form-control form-control-sm" name="shorting">
                        <option value="all">Filter status</option>
                        <option value="proses">proses</option>
                        <option value="tolak">tolak</option>
                        <option value="selesai">selesai</option>
                      </select>
                    </div>
                    <div>
                    <button type="submit"  class="input-group-text border-0" >
                      <i class="fas fa-stair">Filter</i>
                    </button>
                    </div>
                  </form>
                  <form class="input-group rounded col-4" action="" method="get">
                    <input type="search" class="form-control form-control-sm" placeholder="cari" name="cari" />
                    <button type="submit"  class="input-group-text border-0" >
                      <i class="fas fa-search"></i>
                    </button>
                  </form>
              </div><!-- /.row -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php 
                $que = mysqli_query($qw, "SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan");
                if(  mysqli_fetch_assoc($que)==0){
                  echo"<font color='red'>belum ada laporan yang dapat di lampirkan</font>";
                }else{
                ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Laporan</th>
                  <th>Isi Laporan</th>
                  <th>foto</th>
                  <th>status</th>
                  <th>Petugas Yang Menanggapi</th>
                  <th>Tanggapan</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($_GET['cari'])){
                  $cari = $_GET['cari'];
                  $dat = mysqli_query($qw,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan AND id_pengaduan like '%$cari%' OR tgl_pengaduan like '%$cari%' OR isi_laporan like '%$cari%'");		
                }else{
                $dat= mysqli_query($qw, "SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan ");
                  }
                if(isset($_GET['sort'])){
                    $sort = $_GET['sort'];
                    $shorting = $_GET['shorting'];
                    if(($sort == "all") AND ($shorting == "all")) {
                      $dat = mysqli_query($qw,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan ");	
                    }
                    elseif (($sort == "all") AND (($shorting == "tolak")OR($shorting == "selesai")OR($shorting == "proses"))) {
                      $dat = mysqli_query($qw,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan AND status='$shorting'");
                    }
                    elseif ((($sort == "sampah")OR($sort == "warga")OR($sort == "jalan")OR($sort == "air")) AND ($shorting == "all")) {
                      $dat = mysqli_query($qw,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan AND tentang = '$sort'");
                    }
                    else{
                    $dat = mysqli_query($qw,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan AND tentang = '$sort' AND status='$shorting'");}		
                }
                $no = 1;
                while ($data = mysqli_fetch_assoc($dat)) 
                {
                ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['tgl_pengaduan']; ?></td>
                      <td><?php echo $data['isi_laporan']; ?></td>
                      <td align="center"><img src="../img/<?php echo $data['foto']; ?>" width="30px" alt="gambar tidak tersedia"></td>
                      <td>
                          <?php
                          if ($data['status'] == 'proses') {
                            echo "<span class='badge bg-warning'>proses</span>";
                          } elseif ($data['status'] == 'selesai') {
                            echo "<span class='badge bg-success'>selesai</span>";
                          } elseif ($data['status'] == 'tolak')  {
                            echo "<span class='badge bg-danger'>tolak</span>";
                          }
                          ?>
                        </td>
                        <td align="center"><?php 
                        if($data['id_petugas'] == 1){
                            echo "admin";
                        }else{
                          echo "petugas";
                        }
                        ?></td>
                        <td>
                          <?php
                          if ($data['status'] == 'selesai') {
                            echo $data['tanggapan'];
                          }elseif ($data['status'] == 'tolak'){
                            echo "laporan di tolak";
                          }elseif ($data['status'] == 'proses'){
                            echo "laporan dalam proses peninjauan";
                          }
                          ?>
                      </td>
                    </tr>
                      </div>
                    </div>
                  </div>

                <?php
                }
                ?>
                <div class="dropdown">
        <a class="btn btn-primary" href="print.php?sort=<?= $sort; ?>&&shorting=<?= $shorting ?>" role="button" target="_blank">
        <i class="fas fa-print"></i>Generate Laporan
        </a>
      </div><br>
                </tbody>
              </table>
              <?php
                }
                ?>
            </div>
          <!-- /.card -->
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
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
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
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

</body>
</html>
