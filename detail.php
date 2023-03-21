<?php
require 'cek.php';
$id = $_GET["id"];
$qll = mysqli_query($qq,"SELECT * FROM pengaduan WHERE id_pengaduan= $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="asd.css">
</head>

<body id="page-top">

<div class="card shadow">
    <div class="card-header">
        tulis pengaduan
    </div>
    <div class="card-body">
                <a href="?url=lihat-laporan" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">kembali</span>
                </a>
                
            <?php
            while($gg = mysqli_fetch_assoc($qll)){
            ?>
        <form action="" method="" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                <label for="">tanggal pengaduan</label>
                <input type="text" value="<?= $gg['tgl_pengaduan'];?>" class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label for="">laporan anda</label>
                <textarea class="form-control" style="width: 100%; resize: none; height: 250px; outline: none; padding: 15px; font-size: 16px; margin-top: 5px; border-radius: 5px; max-height: 330px; caret-color: #4671EA; border: 1px solid #bfbfbf;" readonly>
                <?= $gg['isi_laporan'];?>
                </textarea>
            </div>
            <script>
                const textarea = document.querySelector("textarea");
                textarea.addEventListener("keyup", e =>{
                textarea.style.height = "63px";
                let scHeight = e.target.scrollHeight;
                textarea.style.height = `${scHeight}px`;
                });
            </script>
            <div class="form-group cols-sm-6">
                <label for="gbr">foto bukti laporan</label><br>
                <img src="img/<?= $gg['foto'];?>" alt="foto gagal dimuat" width="300px" readonly>
            </div>
        </form>
        <?php } ?>
    </div>
</div>
</body>

</html>