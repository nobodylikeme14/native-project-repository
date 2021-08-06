<?php
	session_start();
	include 'connection.php';
	$Email = stripslashes(strip_tags(htmlspecialchars($_POST['Email'] ,ENT_QUOTES)));
  $Password = md5($_POST['Password']);
	$SQL = mysqli_query($conn,"SELECT * FROM data_siswa WHERE Email = '$Email' AND Password = '$Password'");
	$numRow = mysqli_num_rows($SQL);
	if($numRow > 0){
		$data = mysqli_fetch_assoc($SQL);
		$_SESSION['Nama'] = $data['Nama'];
		$_SESSION['Kelas'] = $data['Kelas'];
		$_SESSION['Jurusan'] = $data['Jurusan'];
		$_SESSION['Jenis_Kelamin'] = $data['Jenis_Kelamin'];
		$_SESSION['Tanggal_Tempat_Lahir'] = $data['Tanggal_Tempat_Lahir'];
		$_SESSION['Nis'] = $data['Nis'];
		$_SESSION['Email'] = $data['Email'];
		$_SESSION['Status_Ujian_Percobaan'] = $data['Status_Ujian_Percobaan'];
    $ar = array();
    $ar['info'] = array("alert alert-success","Login Berhasil !","dashboardujian/");
    echo json_encode($ar);
	}else{
    $ar = array();
    $ar['info'] = array("alert alert-danger","Email atau Password Anda Salah !","javascript:void(0)");
    echo json_encode($ar);
	}
  mysqli_close($conn);
?>
