<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD Native PHP 7 with Bootstrap 5</title>
  </head>
  <body>
    <div class="container">
        <h2>CRUD Native PHP 7 with Bootstrap 5</h2>
        <div class="row">
            <div class="col-12">
                <hr>
                <a href="add.php" class="btn btn-primary">Tambah</a>
                <hr>
                <?php
                    if(isset($_GET['status'])){
                        if($_GET['status'] == "success"){
                        ?>
                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?php echo $_GET['message']; ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        }else if($_GET['status'] == "error"){
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><?php echo $_GET['message']; ?></strong>
                                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                             </div>
                         <?php
                        }
                    }
                ?>
            </div>
            <div class="col-12">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "config.php";
                        $result = mysqli_query($config, "SELECT * FROM karyawan ORDER BY id DESC");
                        $nomor = 1;
                        if (mysqli_num_rows($result) > 0) {
                            while($data = mysqli_fetch_array($result)) {      
                        ?>
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['umur']; ?></td>
                            <td><?php echo $data['jabatan']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td>
                                <a class="btn btn-info" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                                <a class="btn btn-danger" onclick="return confirm('Hapus data ini ?');" href="process.php?action=delete&id=<?php echo $data['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                            }
                        }else{
                        ?>
                            <tr>
                                <td colspan="6"><center>Tidak ada data ditemukan</center></td>
                            </tr>
                        <?php
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>