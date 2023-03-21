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
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Adukan.ini</title>
        <link rel="icon" type="image/x-icon" href="img/logo.png" />
        <!-- Favicon-->
        <i class="fas fa-hard-hat"></i>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/sty.css" rel="stylesheet" />
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Pengaduan Adukan.Ini</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Login</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Tentang</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#tutor">Panduan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="img/logo.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Pengaduan Adukan.Ini</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Pengaduan Masyarakat - Produktivitas - Laporan</p>
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="masyarakat.php">
                        <i class="fas fa-edit"></i>
                        Buat Pengaduan Anda!
                    </a>
                </div>
            </div>
        </header>
        
        <!-- About Section-->
        <section class="page-section bg-success text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Tentang Adukan.Ini</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Banyak sekali kejadian di sekitar anda yang mungin akan berpengaruh pada lingkungan anda, adanya web Adukan.Ini yaitu untuk memudahkan masyarakat adalah menyampaikan pikiran dan aspirasi di lingkungan sekitar.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Dengan adanya Website Adukan.Ini anda senantiasa bisa lebih dekat dengan pemerintah dalam menagani masakah lingkungan secara bersama-sama sehingga menciptaan negri yang nyaman bagi semua Masyarakat</p></div>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="tutor">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cara membuat pengaduan anda sendiri</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                <div class="col">
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bagai Mana Cara Membuat Pengaduan??</h6>
                        </div>
                        <div class="card-body">
                            <span>1. Anda harus login terlebih dahulu, jika tidak punya akun registrasi terlebih dahulu</span><br>
                            <span>2. Pergi ke Menu Tulis Laporan</span><br>
                            <span>3. Isi Semua Formulir dengan Benar dan Teliti</span><br>
                            <span>4. Isi Formulir Sesuai dengan Ketentuan yang Berlaku</span><br>
                            <span>5. Lalu Klik Tombol Kirim</span><br>
                            <span>6. Selamat Anda Telah Membuat Sebuah Pengaduan</span><br>
                        </div>
                        </div>

                        <!-- Approach -->
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bagaimana dengan Laporan yang telah dikirimkan?</h6>
                        </div>
                        <div class="card-body">
                            <span>1. Pengaduan Anda akan Terkirim ke Petugas</span><br>
                            <span>2. Pengaduan yang Telah Dikirimkan Akan Di Validasi oleh Petugas</span><br>
                            <span>3. Setelah di Validasi, Pengaduan Anda akan Ditanggapi jika tanggapan anda Dianggap relevan oleh Petugas</span><br>
                            <span>4. Pengaduan yang telah ditanggapi oleh Petugas akan Muncul di Menu Lihat Laporan -> Tanggapan</span><br>
                            <span>5. Pada Menu Tanggapan, Anda akan diberitahu tentang Status Pengaduan Anda</span><br>
                            <span>6. Jika Laporan anda di tolak, maka buatlah laporan baru yang lebih detail tentang masalah yang di laporkan</span><br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer text-center" id="contact">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Lokasi </h4>
                        <p class="lead mb-0">
                            SMK Muhamadiyah 02 Cibiru
                            <br />
                            Jl . Pinus, Palasari, Kec. Cibiru, Bandung 40615
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">hubungi Kami</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/smkmuh2.cibiru/"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/yumnd2y/"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://wa.me/+6285724099098"><i class="fab fa-fw fa-whatsapp"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Tentang Penulis</h4>
                        <p class="lead mb-0">
                            Merupakan seorang pelajar yang menggeluti ilmu di bidang IT
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Muhamad Achyar 2023</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="vendor/jquery/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<!-- SweetAlert2 -->
<script src="admin/plugins/sweetalert2/sweetalert2.min.js"></script>
    <?php
//ambil nilai variabel error
if ($pesan=="logout"){
?>

<script type="text/javascript">
  const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 5000
    });
  Toast.fire({
      icon: 'info',
      title: 'Terimakasih Telah Berkunjung Di Website Kami'
  });

</script>

<?php
}
?>
    </body>
</html>
