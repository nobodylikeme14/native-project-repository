<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include "kendaraan.php";

		$kdr = new kendaraan();
		$kdr->merk = "Honda";
		$kdr->warna = "Hitam";
		$kdr->pemilik = "Dian";

		echo $kdr->pemilik." memiliki kendaraan dengan merk ".$kdr->merk." berwarna ".$kdr->warna;

	?>
</body>
