<?php
	include '../connection.php';

	$con = mysqli_connect($host, $user, $password, $db);

	if (!$con) {
		die(mysqli_connect_error($con));
	}

	$query = mysqli_query($con, "SELECT * FROM tb_buku");

	$result = array();
	while ($row = mysqli_fetch_array($query)) {
		array_push($result, array(
			'id_buku' => $row['id_buku'],
			'judul_buku' => $row['judul_buku'],
			'pengarang' => $row['pengarang'],
			'penerbit' => $row['penerbit'],
			'tahun' => $row['tahun'],
			'kota' => $row['kota'],
			'deskripsi' => $row['deskripsi'],
			'deskripsi_pendek' => $row['deskripsi_pendek'],
			'pict' => $row['pict']
		));
	}

	$query = mysqli_query($con, "SELECT * FROM tb_testimoni GROUP BY id DESC");
	$result1 = array();
	while ($row = mysqli_fetch_array($query)) {
		array_push($result1, array(
			'id' => $row['id'],
			'nama' => $row['nama'],
			'text' => $row['text'],
			'pict' => $row['pict']
		));
	}

	echo json_encode(array(
		'buku' => $result,
		'testimoni' => $result1
	));