<?php
require "cek.php";
if(isset($_GET['url'])){
    $url= $_GET['url'];
    switch($url){
        case'tulis-laporan';
        include'tulis.php';
        break;

        case'lihat-laporan';
        include'lihat.php';
        break;

        case'detail-pengaduan';
        include'detail.php';
        break;

        case'edit-pengaduan';
        include'edit.php';
        break;

        case'tanggapan';
        include 'tanggapan.php';
        break;

        case'profil';
        include'profil.php';
        break;

        case 'update';
        include 'update-user.php';
        break;

        case 'panduan-pengguna';
        include 'panduan.php';
        break;
    }
}else{
  ?>
  <!DOCTYPE html>
<html lang="en">

<head>

</head>

<body class="" style="background-image: url('img/batman.jpg'); ;">

<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
              <?php
              include "cek.php";
              $selek = mysqli_query($qq,"SELECT * FROM pengaduan WHERE nik = '$NIK'");
              if($hawe = mysqli_num_rows($selek)){

              ?>
            <div class="col-xl-4 col-md-4 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengaduan Anda</div>
                     
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $hawe; ?></div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <?php }?>
            <!-- Earnings (Monthly) Card Example -->
              <?php
              include "cek.php";
              $sele = mysqli_query($qq,"SELECT * FROM pengaduan WHERE status ='proses' AND nik = '$NIK'");
              if($haw = mysqli_num_rows($sele)){
              ?>
            <div class="col-xl-4 col-md-4 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">pengaduan yang sedang di proses</div>
                      
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $haw; ?></div>
                     
                    </div>
                    <div class="col-auto">
                      <i class="far fa-clock fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
            <!-- Earnings (Monthly) Card Example -->
              <?php
              include "cek.php";
              $sel = mysqli_query($qq,"SELECT * FROM pengaduan WHERE status ='selesai' AND nik = '$NIK'");
              if($han = mysqli_num_rows($sel)){
              ?>
            <div class="col-xl-4 col-md-4 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">pengaduan yang telah selesai</div>
                     
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $han; ?></div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>

          <!-- Content Row -->

          <div class="row">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tentang Situs Pengaduan Masyarakat Adukan.Ini</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p><a target="_blank" rel="nofollow" href="https://www.instagram.com/yumnd2y/">Adukan.Ini</a> adalah situs pengaduan masyarakat yang telah hadir untuk memudahkan masyarakat dalah melaporkan berbagai hal yang terjadi di lingkingan sekitar sehingga masyarakat dan pemerintah lebih dekat serta lebih maju dalam membangun negri </p>
                </div>
              </div>

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Development kami</h6>
                </div>
                <div class="card-body">
                  <p>Adukan.Ini di buat oleh programer muda Muhamad Achyar semasa di sekolah dibantu dengan pembimbing serta teman-teman sebayanya sehingga menjadikan web sederhada akan tetapi responsible terhadap kondisi masyarakat</p>
                  <p class="mb-0">Tidak banyak yang tahu jika dalam umur muda seseorang bisa mengembangkan bakat contohnya Ahyar dan teman-temanya ini yang telah berusaha sebaik mungkin dalam mengembangkan teknologi yang ada di indonesia ini</p>
                </div>
              </div>

            </div>
          </div>

        </div>
 
</body>

</html>


<?php } ?>