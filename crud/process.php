<?php
    include "config.php";
    switch ($_GET['action']) {
        case 'add':
            if (!empty($_POST)) {
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $jabatan = $_POST['jabatan'];
                $alamat = $_POST['alamat'];
                
                $insert = mysqli_query($config, "INSERT INTO karyawan(nama,umur,jabatan,alamat) VALUES('$nama','$umur','$jabatan','$alamat')");
                if ($insert) {
                    header("location:index.php?status=success&message=Data Berhasil Ditambah");
                }
                else{
                    header("location:index.php?status=error&message=Data Gagal Ditambah");
                }
            }
        break;

        case 'update':
            if (!empty($_POST)) {
                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $jabatan = $_POST['jabatan'];
                $alamat = $_POST['alamat'];
                
                $update = mysqli_query($config, "UPDATE karyawan SET nama='$nama', umur='$umur', jabatan='$jabatan', alamat='$alamat' WHERE id='$id'");
                if ($update) {
                    header("location:index.php?status=success&message=Data Berhasil Diubah");
                }
                else{
                    header("location:index.php?status=error&message=Data Gagal Diubah");
                }
            }
        break;

        case 'delete':
            if (!empty($_GET)) {
                $id = $_GET['id'];       

                $delete = mysqli_query($config, "DELETE FROM karyawan WHERE id='$id'");
                if ($delete) {
                    header("location:index.php?status=success&message=Data Berhasil Dihapus");
                }
                else{
                    header("location:index.php?status=error&message=Data Gagal Dihapus");
                }
            }
        break;
    }
?>