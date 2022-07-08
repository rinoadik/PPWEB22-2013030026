<?php
include 'koneksi.php';
$npm = $_GET['npm'];

$sql = "SELECT * FROM mhs WHERE npm='$npm'";
$res = $conn->query($sql);
$dat = $res->fetch_assoc();
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

	<?php
    include 'header.php';
    ?>

		<div class="container mt-5" style="padding: 5;background-color: #fff;border:1px solid"><br>
		<h3 class="text-center">EDIT DATA MAHASISWA</h3><BR>
			<a href='index.php'><button type="button" class="btn btn-primary">BACK</button></a><br>

			<br>
			<form action="mhs_proc.php" method="POST">	

				<div class="form-group">
					<label for="exampleInputEmail1">NPM</label>
					<input type="text" class="form-control" id="npm"  name="npm" aria-describedby="emailHelp" value="<?php echo $dat['npm']?>">
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Nama</label>
					<input type="text" class="form-control" id="nama"  name="nama" value="<?php echo $dat['nama']?>">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Alamat</label>
					<input type="text" class="form-control" id="alamat"  name="alamat" value="<?php echo $dat['alamat']?>">
				</div>

				<br>
				<input type="submit" class="btn btn-success" name="submit_edit" id="submit_edit" value="PERBARUI">
				<input type="submit" class="btn btn-danger" name="submit_delete" id="submit_delete" value="HAPUS">
			</form>
			<br>
</body>
</html>