<?php
	include '../connection.php';

	$con = mysqli_connect($host, $user, $password, $db);

	if (!$con) {
		die(mysqli_connect_error($con));
	}

	$query = mysqli_query($con, "SELECT * FROM tb_jenisgallery");

	$result = array();
	while ($row = mysqli_fetch_array($query)) {
		array_push($result, array(
			'id_jenisgalery' => $row['id_jenisgalery'],
			'nama_jenis' => $row['nama_jenis']
		));
	}

	$hasil = json_encode(count($result));

	$result1 = array();
	for ($i=1; $i <= $hasil; $i++) {
		$query = mysqli_query($con, "SELECT COUNT(tb_galery.id) AS jumlah,tb_galery.pict , tb_jenisgallery.id_jenisgalery, tb_jenisgallery.nama_jenis FROM tb_galery INNER JOIN tb_jenisgallery ON tb_jenisgallery.id_jenisgalery = tb_galery.jenis WHERE tb_jenisgallery.id_jenisgalery = '".$i."'")or die( mysqli_error($con));
		while($row = mysqli_fetch_array($query)){
			array_push($result1, array(
				'jumlah' => $row['jumlah'],
				'pict' => $row['pict'],
				'id_jenisgalery' => $row['id_jenisgalery'],
				'nama_jenis' => $row['nama_jenis']
			));
		}
	}
	echo json_encode(array(
		'image' => $result1
	));

