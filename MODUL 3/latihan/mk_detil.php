<?php
include 'koneksi.php';
$kode = $_GET['kode'];

$sql = "SELECT * FROM mk WHERE kode='$kode'";
$res = $conn->query($sql);
$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>mk edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<?php include 'header.php';?>
	<?php include 'menu.php';?>
	<br>
	<form name="myform" action="mk_proc.php" method="POST">
		Kode
		<br><input type="text" name="kode" id="kode" value="<?php echo $dat['kode']?>">
		<br>Nama
		<br><input type="text" name="nama" id="nama" size="30" value="<?= $dat['nama']?>">
		
		<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
		<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
	</form>
</body>
</html>