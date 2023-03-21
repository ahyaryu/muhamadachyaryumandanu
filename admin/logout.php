<?php
session_start();
$_SESSION['userna']='';
unset($_SESSION['userna']);
session_unset();
session_destroy();
header('Location:index.php?pesan=logout');
?>
