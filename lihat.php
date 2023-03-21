<?php 
include "cek.php";
$use=$_SESSION["username"];
$cek=mysqli_query($qq, "select * from masyarakat where username='$use'");
$t=mysqli_fetch_assoc($cek);
$n=$t['nik'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="bg-success" style="text-align: center; color:white;">
                      <th>id pengaduan</th>
                      <th>tanggal</th>
                      <th>isi laporan</th>
                      <th>bukti foto</th>
                      <th>status</th>
                      <th>aksi</th>
                    </tr>
                    <tr>
                    <?php 
                        include "cek.php";
                        $quer = mysqli_query($qq, "SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]' ORDER BY id_pengaduan DESC");
                        while($sles = mysqli_fetch_assoc($quer)){

                    ?>
                        <tr style="text-align: center;">
                            <td><?php echo $sles['id_pengaduan'];?></td>
                            <td><?php echo $sles['tgl_pengaduan'];?></td>
                            <td><?php echo $sles['isi_laporan'];?></td>
                            <td><img src="img/<?= $sles['foto'];?>" alt="foto gagal dimuat" width="60px" readonly></td>
                            <td>
                            <?php
                          if ($sles['status'] == 'proses') {
                            echo "<span class='badge bg-warning'>proses</span>";
                          } elseif ($sles['status'] == 'selesai') {
                            echo "<span class='badge bg-success'>selesai</span>";
                          } elseif ($sles['status'] == 'tolak')  {
                            echo "<span class='badge bg-danger'>tolak</span>";
                          }elseif ($sles['status'] == '0')  {
                            echo "<span class='badge bg-primary'>menunggu</span>";}
                          ?>
                            </td>
                            <td>
                                <?php 
                                $coy = $sles['status'];
                                if($coy == "0"){
                                ?>
                                <a href="?url=edit-pengaduan&id=<?php echo $sles['id_pengaduan'];?>" type="button" class="badge badge-success" title="Edit"><i class="far fa-edit"></i></a>
                                <?php }?>
                                <a href="?url=detail-pengaduan&id=<?php echo $sles['id_pengaduan'];?>" type="button" class="badge badge-warning" title="Detail"><i class="fas fa-info"></i></a>
                                <a href="?url=tanggapan&id=<?php echo $sles['id_pengaduan'];?>" type="button" class="badge badge-primary" title="Tanggapan"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php }?>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</script>
</body>
</html>
