<?php
include 'koneksi.php';

if(isset($_POST['submit_add'])){
	$id = $_POST['id'];
	$npm = $_POST['npm'];
	$matkul = $_POST['matkul'];
	$semester = $_POST['semester'];
	$ta = $_POST['ta'];
	$nilai = $_POST['nilai'];

	$sql = "INSERT INTO krs
			(id,mhs_npm,mk_kode,semester,ta_id,nilai)
			VALUES
			('$id','$npm','$matkul','$semester','$ta','$nilai')";
	if(!$conn->query($sql))
		die('Tambah KRS Gagal');
	else
		header("Location: krs.php");
}

if(isset($_POST['submit_edit'])){
	$id = $_POST['id'];
	$npm = $_POST['mhs_npm'];
	$mk = $_POST['mk'];
	$sem = $_POST['sem'];
	$ta = $_POST['ta'];
	$nilai = $_POST['nilai'];

	$sql = "UPDATE krs
			SET mhs_npm='$npm',mk_kode='$mk',semester='$sem',ta_id='$ta',nilai='$nilai'
			WHERE id='$id'";
	if(!$conn->query($sql))
		die('Edit krs Gagal');
	else
		header("Location: krs.php");
}

if(isset($_POST['submit_delete'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM krs
			WHERE id='$id'";
	if(!$conn->query($sql))
		die('Hapus TA Gagal');
	else
		header("Location: krs.php");
}
?>