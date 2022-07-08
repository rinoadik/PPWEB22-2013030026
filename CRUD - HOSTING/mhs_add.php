<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CRUD MAHASISWA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<body style="background-color:#F2F3F4 ;">

	<?php include 'header.php';?>
	<div class="container mt-5" style="padding: 5;background-color: #fff;border:1px solid"><br>
		<h3 class="text-center">TAMBAH DATA MAHASISWA</h3><BR>
			<a href='index.php'><button type="button" class="btn btn-primary">BACK</button></a>
			<a href='index.php'> <button type="button" class="btn btn-warning">VIEW</button></a>
			<br>
	
	<form name="myform" action="mhs_proc.php" method="POST">
		<div class="form-group">
			<label for="exampleInputEmail1">NPM</label>
			<input type="text" class="form-control" id="npm"  name="npm" aria-describedby="emailHelp" placeholder="Masukan npm ">
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">Nama</label>
			<input type="text" class="form-control" id="nama"  name="nama" aria-describedby="emailHelp" placeholder="Masukan nama ">
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">Alamat</label>
			<input type="text" class="form-control" id="alamat"  name="alamat" aria-describedby="emailHelp" placeholder="Masukan alamat ">
		</div><br>
		<input type="submit" name="submit_add" id="submit_add" value="SIMPAN" class="btn btn-danger">
	</form>
	<br>
</body>
</html>