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

$pengaduan = mysqli_query($qw,"SELECT * FROM masyarakat");	

$mpdf = new \Mpdf\Mpdf();
$html ='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inc.Jak | Print</title>
    <link rel="icon" type="image/x-icon" href="dist/img/prod-1.jpg" />
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
    <table align="center" border="1" cellpadding="9" cellspacing="0" style="width: 210mm;">
        <tr bgcolor="#CCCCCC" align="center">
            <th style="width: 10mm;" height="50">No</th>
            <th style="width: 40mm;">Nik</th>
            <th style="width: 50mm;">Nama Pengguna</th>
            <th style="width: 30mm;">Nomor Telpon</th>
            <th style="width: 50mm;">Username</th>
        </tr>';
        $no = 1;
        foreach ($pengaduan as $key) {
$html .= '<tr>
            <td align="center">'.$no++.'</td>
            <td align="center">'.$key["nik"].'</td>
            <td align="center">'.$key["nama"].'</td>
            <td align="center">'.$key["telp"].'</td>
            <td align="center">'.$key["username"].'</td>
        </tr>';
        }
$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>
