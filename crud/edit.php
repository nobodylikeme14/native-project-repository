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
                <a href="index.php" class="btn btn-info">Kembali</a>
                <hr>
            </div>
            <div class="col-6">
            <form action="process.php?action=update" method="post">

                <?php
                    include "config.php";
                    $id = $_GET['id'];
                    $result = mysqli_query($config, "SELECT * FROM karyawan WHERE id = '$id'");
                    while($data = mysqli_fetch_array($result)) {
                ?>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" name="nama" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Umur</label>
                    <input type="number" class="form-control" value="<?php echo $data['umur'] ?>" name="umur" placeholder="Umur" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <select class="form-select" name="jabatan" required>
                        <option <?php if($data['jabatan'] == 'Karyawan'){ echo 'selected';  } ?>>Karyawan</option>
                        <option <?php if($data['jabatan'] == 'Manager'){ echo 'selected';  } ?>>Manager</option>
                        <option <?php if($data['jabatan'] == 'CEO'){ echo 'selected';  } ?>>CEO</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" placeholder="Alamat" rows="3" required><?php echo $data['alamat'] ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn btn-danger">Reset</button>

                <?php        
                    }
                ?>

            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>