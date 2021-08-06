<?php
  session_start();
  if ($_SESSION['Status_Ujian_Percobaan'] == "Belum Ujian") {
    echo '<script>
            $("#cetakHasil1").hide();
            $("#ikutiUjian1").show();
          </script>';
  }else if ($_SESSION['Status_Ujian_Percobaan'] == "Sudah Ujian") {
    echo '<script>
            $("#cetakHasil1").show();
            $("#ikutiUjian1").hide();
          </script>';
  }else{}
?>
<script>
  $('#list-ujian').DataTable();
</script>
<div class="table-responsive">
<table id="list-ujian" class="table table-striped table-bordered" style="width:100%">
  <thead class="text-center">
    <tr>
      <th>No.</th>
      <th>Nama Ujian</th>
      <th>Mata Pelajaran</th>
      <th>Guru</th>
      <th>Jumlah Soal</th>
      <th>Waktu</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $Nomor = 1;
      include "connection.php";
      $sql = mysqli_query($conn,"SELECT * FROM data_soal_ujian;");
      while ($result = mysqli_fetch_assoc($sql)) {
        echo '
          <tr>
            <td>'.$Nomor.'</td>
            <td>'.$result['Nama_Ujian'].'</td>
            <td>'.$result['Mata_Pelajaran'].'</td>
            <td>'.$result['Guru'].'</td>
            <td>'.$result['Jumlah_Soal'].' Soal</td>
            <td>'.$result['Waktu'].'</td>
            <td><a href="../ujian/10'.$Nomor.'/"><button id="ikutiUjian'.$Nomor.'" type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Ikuti Ujian</button></a>
            <a href="../cetak/10'.$Nomor.'/"><button id="cetakHasil'.$Nomor.'" type="button" class="btn btn-info btn-sm"><i class="fa fa-print"></i> Cetak Hasil</button></td></a>
          </tr>
        ';
        $Nomor++;
        $_SESSION['Nama_Ujian'] = $result['Nama_Ujian'];
        $_SESSION['Mata_Pelajaran'] = $result['Mata_Pelajaran'];
        $_SESSION['Guru'] = $result['Guru'];
        $_SESSION['Jumlah_Soal'] = $result['Jumlah_Soal'];
        $_SESSION['Waktu'] = $result['Waktu'];
        $_SESSION['Token'] = $result['Token'];
      }
    ?>
  </tbody>
</table>
</div>
