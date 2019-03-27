<?php
	include '../connection.php';

	$con = mysqli_connect($host, $user, $password, $db);

	if (!$con) {
		die(mysqli_connect_error($con));
	}

	$query = mysqli_query($con, "SELECT tb_informasi.id, tb_informasi.judul, tb_informasi.pict, tb_informasi.informasi, tb_informasi.tgl, tb_jenisinfo.jenisinformasi FROM tb_informasi INNER JOIN tb_jenisinfo ON tb_jenisinfo.id = tb_informasi.id_jenisinfo WHERE jenisinformasi != 'article' ORDER BY tb_informasi.id DESC");

	$result = array();
	while ($row = mysqli_fetch_array($query)) {
		array_push($result, array(
			'id' => $row['id'],
			'judul' => $row['judul'],
			'informasi' => $row['informasi'],
			'pict' => $row['pict'],
			'tgl' => $row['tgl'],
			'tentang' => $row['jenisinformasi']
		));
	}

	$query = mysqli_query($con, "SELECT tb_informasi.id, tb_informasi.judul, tb_informasi.pict, tb_informasi.informasi, tb_informasi.tgl, tb_jenisinfo.jenisinformasi FROM tb_informasi INNER JOIN tb_jenisinfo ON tb_jenisinfo.id = tb_informasi.id_jenisinfo WHERE jenisinformasi = 'article' ORDER BY tb_informasi.id DESC");

	$result2 = array();
	while ($row = mysqli_fetch_array($query)) {
		array_push($result2, array(
			'id' => $row['id'],
			'judul' => $row['judul'],
			'informasi' => $row['informasi'],
			'pict' => $row['pict'],
			'tgl' => $row['tgl'],
			'tentang' => $row['jenisinformasi']
		));
	}

	echo json_encode(array(
		'newsEvent' => $result,
		'article' => $result2
	));