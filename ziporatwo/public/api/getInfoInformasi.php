<?php
	include 'connection.php';

	$con = mysqli_connect($host, $user, $password, $db);

	if (!$con) {
		die(mysqli_connect_error($con));
	}

	$qr = "SELECT tb_informasi.id, tb_informasi.judul, tb_informasi.informasi, tb_jenisinfo.jenisinformasi, tb_informasi.pict, tb_informasi.tgl FROM tb_informasi INNER JOIN tb_jenisinfo ON tb_jenisinfo.id = tb_informasi.id_jenisinfo";
	$result = mysqli_query($con, $qr);

	if (mysqli_num_rows($result) > 0) {
		$arr_rak = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$arr_rak[] = $row;
		}
		echo json_encode($arr_rak);
	}
	else {
		echo "Tidak terdapat";
	}