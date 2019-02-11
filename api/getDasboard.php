<?php
	include 'connection.php';

	$con = mysqli_connect($host, $user, $password, $db);

	if (!$con) {
		die(mysqli_connect_error($con));
	}

	$query = mysqli_query($con, "SELECT tb_informasi.id, tb_informasi.judul, tb_informasi.pict, tb_informasi.informasi, tb_informasi.tgl, tb_jenisinfo.jenisinformasi FROM tb_informasi INNER JOIN tb_jenisinfo ON tb_jenisinfo.id = tb_informasi.id_jenisinfo");

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

	$query = mysqli_query($con, "SELECT tb_galery.id, tb_jenisgallery.nama_jenis, tb_galery.tgl, tb_galery.info ,tb_galery.pict FROM tb_galery INNER JOIN tb_jenisgallery ON tb_jenisgallery.id_jenisgalery = tb_galery.jenis");
	$result2 = array();
	while ($row = mysqli_fetch_array($query)) {
		array_push($result2, array(
			'id' => $row['id'],
			'pict' => $row['pict'],
			'info' => $row['info'],
			'tgl' => $row['tgl'],
			'tentang' => $row['nama_jenis']
		));
	}

	$query = mysqli_query($con, "SELECT name_class, deskripsi FROM tb_class");
	$result3 = array();
	while ($row = mysqli_fetch_assoc($query)) {
		array_push($result3, array(
			'name_class' => $row['name_class'],
			'deskripsi' => $row['deskripsi']
		));
	}

	$query = mysqli_query($con, "SELECT tb_member.id_member, tb_member.name, tb_member.email, tb_member.telp, tb_member.alamat, tb_member.institusi, tb_member.tgl_masuk, tb_class.name_class FROM tb_member INNER JOIN tb_class ON tb_class.id_class = tb_member.id_class ORDER BY tb_member.id_member DESC");
	$result4 = array();
	while ($row = mysqli_fetch_assoc($query)) {
		array_push($result4, array(
			'id_member' => $row['id_member'],
			'name_class' => $row['name_class'],
			'name' => $row['name'],
			'email' => $row['email'],
			'telp' => $row['telp'],
			'alamat' => $row['alamat'],
			'institusi' => $row['institusi'],
			'tgl_masuk' => $row['tgl_masuk']
		));
	}

	echo json_encode(array(
		'gallery' => $result2,
		'informasi' => $result,
		'class' => $result3,
		'member' => $result4
	));