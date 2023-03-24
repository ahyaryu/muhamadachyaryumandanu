<?php
session_start();
include 'cek.php';
if ($_SESSION['status'] != "login"){
  header("Location:login.php");
}else{
$NIK=$_SESSION['nik'];
    $cr=mysqli_query($qq,"select * from masyarakat where nik='$NIK'");
    $t=mysqli_fetch_array($cr);
    $tes=$t['nama'];
    $tik=$t['nik'];
    $lp=$t['telp'];
    $us=$t['username'];

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
  <!-- Custom font untuk web ahyar-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom style pada web ini-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center " >
        <div class="sidebar-brand-icon rotate">
        <i class="fas fa-hard-hat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Adukan.Ini</div>
      </div>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        laporan
      </div>
       <!-- Nav Item - nulis laporan -->
        <li class="nav-item">
          <a class="nav-link" href="?url=tulis-laporan">
            <i class="fas fa-edit"></i>
            <span>Tulis Laporan</span>
          </a>
        </li>
        <!-- Nav Item - liat laporan-->
        <li class="nav-item">
          <a class="nav-link" href="?url=lihat-laporan">
            <i class="fas fa-search"></i>
            <span>Lihat Laporan</span>
          </a>
        </i>
        <!-- Divider -->
        <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Aksi
      </div>
      <!-- Nav Item - keluar -->
      
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt"></i>
          Logout
        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content" >
        <!-- Begin Page Content -->
      <header class="sticky-footer bg-white">
       <!-- Topbar -->
       <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-black mb-4 static-top shadow">
            <!-- pushover -->
          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" id="sidebarToggle"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="masyarakat.php" class="nav-link">Home</a>
            </li>
          </ul>
          <!-- Topbar profil -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $t['nama'];?></span>
                <img class="img-profile rounded-circle" src="img/gh.png" width="25px" >
              </a>
              <!-- Dropdown informasi pengguna -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="dropdown-item">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-black-400"></i>
                  Profile
                  </button>
            </li>
          </ul>
        </nav>
         <!-- End of Topbar -->
     </header>
        <div class="container-fluid" >
          <?php include 'pegang.php'?>
        </div>
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; muhamad achyar yumandanu</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">mau pergi yahh??</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">klik "logout" jika anda ingin meninggalkan kami</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- profil -->
  <div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">profil pengguna</h4>
   </div>
   <div class="modal-body">
    <form method="" id="">
     <label>NIK</label>
     <input type="text" class="form-control" value="<?php echo $NIK?>" readonly/>
     <br />
     <label>Nama Pengguna</label>
     <input type="text" class="form-control" value="<?php echo $tes;?>" readonly/>
     <br />
     <label>Nomor Telepon</label>
     <input type="text" class="form-control" value="<?php echo $t['telp']; ?>" readonly/>
     <br />  
     <label>Username</label>
     <input type="text" class="form-control"  value="<?php echo $t['username'];?>" readonly/>
    </form>
   </div>
   <div class="modal-footer">
      <a href="?url=update&id=<?= $_SESSION['username'];?>" class="btn btn-success">
            <span class="icon text-white-50">
              <i class="fas fa-arrow-up"></i>
          </span>
          <span class="text">update</span>
      </a>
     <br />
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<!-- akir profil -->
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <!-- AdminLTE App -->
  <script src="js/adminlte.js"></script>
  <!-- SweetAlert2 -->
<script src="admin/plugins/sweetalert2/sweetalert2.min.js"></script>
    <?php
//ambil nilai variabel error
if ($pesan=="login"){
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
      title: 'Selamat Datang <?php echo $tes ?>'
  });

</script>

<?php
}

if ($pesan=="lap-sukses"){
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
      title: 'Laporan Telah Terkirim'
  });

</script>

<?php
}

if ($pesan=="lap-gagal"){
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
      title: 'Laporan Gagal Terkirim'
  });

</script>

<?php
}

if ($pesan=="uu-gagal"){
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
      title: 'Profil Gagal Di Update'
  });

</script>

<?php
}

if ($pesan=="uu-sukses"){
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
      title: 'Profil Berhasil Di Update'
  });

</script>

<?php
}

if ($pesan=="lap-kosong"){
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
      title: 'Jenis Laporan Tidak Boleh Kosong'
  });

</script>

<?php
}

if ($pesan=="ul-betul"){
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
      title: 'Data Berhasil Di Update'
  });

</script>

<?php
}

if ($pesan=="ul-salah"){
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
      title: 'Data Gagal Di Update'
  });

</script>

<?php
}
?>
</body>
</html>
<?php
}
?>

