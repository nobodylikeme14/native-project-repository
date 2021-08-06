<?php
session_start();
include "connection.php";

$Nama = $_SESSION['Nama'];
$Password1 = md5($_POST['Password1']);
$sql = mysqli_query($conn,"UPDATE data_siswa SET Password='$Password1' WHERE Nama='$Nama'");
$ar = array();
$ar['info'] = array("alert alert-success","Password Berhasil Diubah !");
echo json_encode($ar);
?>
