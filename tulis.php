    <?php 
include "cek.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/asd.css">
</head>

<body id="page-top">

<div class="card shadow">
    <div class="card-header">
        tulis pengaduan
    </div>
    <div class="card-body">
        <form action="laporancek.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group col-sm-4">
                <label for="">tanggal pengaduan</label>
                <input type="text" name="tgl_pengaduan" value="<?= date('Y-m-d');?>" class="form-control" readonly>
            </div>
            <div class="form-group col-sm-4">
                <label for="">NIK</label>
                <input type="text" name="nik" value="<?= $_SESSION['nik'];?>" class="form-control" readonly>
            </div>
            <div class="form-group col-sm-3">
                <label>Jenis Pengaduan</label><br>
                <select class="form-control form-control-sm-4" name="uku" id="uku">
                    <option value="pilih">pilih jenis Laporan</option>
                    <option value="Lingkungan">Lingkungan</option>
                    <option value="jalan">jalan</option>
                    <option value="air">air</option>
                    <option value="Masyarakat">masyarakat</option>
                </select>
            </div>
            <div class="form-group col-sm-12">
                <label for="">Tulis laporan anda</label>
                <textarea class="form-control" name="isi_laporan" style="width: 100%; resize: none; height: 55px; outline: none; padding: 15px; font-size: 16px; margin-top: 5px; border-radius: 5px; max-height: 330px; caret-color: #4671EA; border: 1px solid #bfbfbf;" placeholder="laporkan sesuatu jika ingin melapor" required></textarea>
            </div>
            <script>
                const textarea = document.querySelector("textarea");
                textarea.addEventListener("keyup", e =>{
                textarea.style.height = "63px";
                let scHeight = e.target.scrollHeight;
                textarea.style.height = `${scHeight}px`;
                });
            </script>
            <div class="form-group col-sm-6">
                <label for="gbr">unggal foto pengaduan anda</label>
                <input type="file" name="gbr" class="form-control-file" id="exampleFormControlFile1" accept=".jpg, .jpeg, .png, .gif" required><font color="red">*tipe yang bisa d upload adalah : jpg, .jpeg, .png, .gif</font>
            </div>
            <div class="form-group col-sm-3">
                <input type="submit" name="send" value="kirim" class="btn btn-primary">
                <input type="reset" value="kosongkan" class="btn btn-warning">
            </div>
        </form>
    </div>
</div>
</body>

</html>