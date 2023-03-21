
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body id="page-top">

<div class="card shadow">
    <div class="card-header">
    </div>
    <div class="card-body">
        <a href="?url=lihat-laporan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                 <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">kembali</span>
         </a>
        <form action="" method="" class="form-horizontal" enctype="multipart/form-data">
            <?php
            require 'cek.php';

            $id=$_GET["id"];
            $select = mysqli_query($qq,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan='$id' AND tanggapan.id_pengaduan=pengaduan.id_pengaduan");
            if(mysqli_num_rows($select)==0){
                $anyi = mysqli_query($qq, "SELECT * FROM pengaduan WHERE id_pengaduan = $id");
                $status = mysqli_fetch_assoc($anyi);
                $status['status'];
                if($status['status'] !== 'tolak'){
                    echo"<font color='red'>pengaduan anda sedang di tinjau</font>";
                }else if($status['status'] = 'tolak'){
                    echo"<font color='red'>pengaduan anda di tolak</font>";
                }
            }else{
                if($plis = mysqli_fetch_assoc($select)){
            ?>
            <div class="form-group cols-sm-6">
                <label for="">tanggal pengaduan</label>
                <input type="text" value="<?= $plis['tgl_tanggapan'];?>" class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label for="">laporan anda</label>
                <textarea class="form-control" id="" cols="30" rows="10" readonly>
                <?= $plis['isi_laporan']; ?>
                </textarea>
            </div>
            <div class="form-group cols-sm-6">
                <label for="">Tanggapan Laporan anda</label>
                <textarea class="form-control" id="" cols="30" rows="10" readonly>
                <?= $plis['tanggapan'];?>
                </textarea>
            </div> 
            <?php } }?>
        </form>
    </div>
</div>
</body>

</html>