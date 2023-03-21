<?php
session_start();
if ($_SESSION["status"] !== "login") 
{
  header("Location:index.php");
}
$username=$_SESSION["userna"];

if($level=='petugas'){
    header("location:beranda.php");
}

require_once __DIR__ . '/vendor/autoload.php';

require 'ceki.php';
$sort = $_GET['sort'];
$shorting = $_GET['shorting'];
    
    if(($sort=="all") AND ($shorting=="all")) {
        $pengaduan = mysqli_query($qw,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan");	
    }
    elseif (($sort == "all") AND (($shorting == "tolak")OR($shorting == "selesai")OR($shorting == "proses"))) {
      $pengaduan = mysqli_query($qw,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan AND status='$shorting'");
    }
    elseif ((($sort == "sampah")OR($sort == "warga")OR($sort == "jalan")OR($sort == "air")) AND ($shorting == "all")) {
      $pengaduan = mysqli_query($qw,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan AND tentang = '$sort'");
    }
    else{
    $pengaduan = mysqli_query($qw,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan=pengaduan.id_pengaduan AND tentang = '$sort' AND status='$shorting'");}		

$mpdf = new \Mpdf\Mpdf();
$html ='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adukan.Ini | print</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png" />
</head>
<body>
    <table style="border-bottom: 1px solid #999999; padding-bottom: 10px; width: 203mm;">
    <tr valign="top">
        <td style="width: 203mm;" valign="middle" align="center">
            <span style="font-weight: bold; padding-bottom: 5px; font-size: 16pt;">
            LAPORAN PENGADUAN MASYARKAT<br>
            </span>
        </td>
    </tr>
    </table>
    <table align="center" border="1" cellpadding="0" cellspacing="0" style="width: 210mm;">
        <tr bgcolor="#CCCCCC" align="center">
            <th style="width: 10mm;" height="50">id</th>
            <th style="width: 40mm;">tanggal</th>
            <th style="width: 50mm;">isi laporan</th>
            <th style="width: 30mm;">Foto</th>
            <th style="width: 50mm;">tanggapan</th>
        </tr>';

        foreach ($pengaduan as $key) {
$html .= '<tr>
            <td align="center">'.$key["id_pengaduan"].'</td>
            <td align="center">'.$key["tgl_pengaduan"].'</td>
            <td align="center">'.$key["isi_laporan"].'</td>
            <td align="center"><img src="../img/'.$key["foto"].'" width="50px" alt="gambar tidak tersedia"></td>
            <td align="center">'.$key["tanggapan"].'</td>
        </tr>';
        }
$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>
