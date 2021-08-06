<?php
session_start();
include "../connection.php";
//Deklarasi Variabel
$_SESSION['Status_Ujian_Percobaan'] = "Sudah Ujian";
$Status = $_SESSION['Status_Ujian_Percobaan'];
$Email = $_SESSION['Email'];
$Nama_Ujian = $_SESSION['Nama_Ujian'];
$Nama_Siswa = $_SESSION['Nama'];
$Id_Siswa = $_SESSION['Nis'];
$jawabanSoal1 = $_POST['jawabanSoal1'];
$jawabanSoal2 = $_POST['jawabanSoal2'];
$jawabanSoal3 = $_POST['jawabanSoal3'];
$jawabanSoal4 = $_POST['jawabanSoal4'];
$jawabanSoal5 = $_POST['jawabanSoal5'];
$jawabanSoal6 = $_POST['jawabanSoal6'];
$jawabanSoal7 = $_POST['jawabanSoal7'];
$jawabanSoal8 = $_POST['jawabanSoal8'];
$jawabanSoal9 = $_POST['jawabanSoal9'];
$jawabanSoal10 = $_POST['jawabanSoal10'];
$nilaiSoal1 = 0;
$nilaiSoal2 = 0;
$nilaiSoal3 = 0;
$nilaiSoal4 = 0;
$nilaiSoal5 = 0;
$nilaiSoal6 = 0;
$nilaiSoal7 = 0;
$nilaiSoal8 = 0;
$nilaiSoal9 = 0;
$nilaiSoal10 = 0;
$jumlahBenar = 0;
//If else nilai
if ($jawabanSoal1 == "D") {
  $nilaiSoal1 = 10;
}else{
  $nilaiSoal1 = 0;
}
if ($jawabanSoal2 == "D") {
  $nilaiSoal2 = 10;
}else{
  $nilaiSoal2 = 0;
}
if ($jawabanSoal3 == "D") {
  $nilaiSoal3 = 10;
}else{
  $nilaiSoal3 = 0;
}
if ($jawabanSoal4 == "C") {
  $nilaiSoal4 = 10;
}else{
  $nilaiSoal4 = 0;
}
if ($jawabanSoal5 == "C") {
  $nilaiSoal5 = 10;
}else{
  $nilaiSoal5 = 0;
}
if ($jawabanSoal6 == "A") {
  $nilaiSoal6 = 10;
}else{
  $nilaiSoal6 = 0;
}
if ($jawabanSoal7 == "C") {
  $nilaiSoal7 = 10;
}else{
  $nilaiSoal7 = 0;
}
if ($jawabanSoal8 == "C") {
  $nilaiSoal8 = 10;
}else{
  $nilaiSoal8 = 0;
}
if ($jawabanSoal9 == "B") {
  $nilaiSoal9 = 10;
}else{
  $nilaiSoal9 = 0;
}
if ($jawabanSoal10 == "D") {
  $nilaiSoal10 = 10;
}else{
  $nilaiSoal10 = 0;
}

$NilaiAll = $nilaiSoal1 + $nilaiSoal2 + $nilaiSoal3 + $nilaiSoal4 + $nilaiSoal5 + $nilaiSoal6 + $nilaiSoal7 + $nilaiSoal8 + $nilaiSoal9 + $nilaiSoal10;

if ($NilaiAll == 100) {
  $jumlahBenar = 10;
}else if($NilaiAll == 90){
  $jumlahBenar = 9;
}else if($NilaiAll == 80){
  $jumlahBenar = 8;
}else if($NilaiAll == 70){
  $jumlahBenar = 7;
}else if($NilaiAll == 60){
  $jumlahBenar = 6;
}else if($NilaiAll == 50){
  $jumlahBenar = 5;
}else if($NilaiAll == 40) {
  $jumlahBenar = 4;
}else if($NilaiAll == 30) {
  $jumlahBenar = 3;
}else if($NilaiAll == 20) {
  $jumlahBenar = 2;
}else if($NilaiAll == 10) {
  $jumlahBenar = 1;
}else{
  $jumlahBenar = 0;
}

$SQL = "UPDATE data_siswa SET Status_Ujian_Percobaan = '$Status' WHERE Email = '$Email'";
mysqli_query($conn,$SQL);
$SQL2 = "INSERT INTO data_hasil_ujian (Id_Siswa, Nama_Siswa, Nama_Ujian, Soal_Benar, Hasil_Akhir) VALUES ('$Id_Siswa','$Nama_Siswa','$Nama_Ujian','$jumlahBenar','$NilaiAll')";
mysqli_query($conn,$SQL2);
mysqli_close($conn);
?>
