<?php
include('inc/config.php');
session_start();
date_default_timezone_set("ASIA/JAKARTA");
$time = date('H:i:s');
$date = date('Y/m/d');
$idUser = $_SESSION["id"];
$query = "UPDATE absen SET jam_keluar='$time' WHERE id_user='$idUser' and tanggal='$date'";
$update = mysqli_query($connection, $query);
session_unset();
session_destroy();
header('Location:login.php');
?>