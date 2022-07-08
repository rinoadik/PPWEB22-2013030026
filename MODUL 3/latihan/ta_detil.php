<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql = "SELECT * FROM ta WHERE id='$id'";
$res = $conn->query($sql);
$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>ta edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<?php include 'header.php';?>
	<?php include 'menu_ta.php';?>
	<br>
	<form name="myform" action="ta_proc.php" method="POST">
		id
		<br><input type="text" name="id" id="id" value="<?php echo $dat['id']?>">
		<br>Nama
		<br><input type="text" name="nama" id="nama" size="30" value="<?= $dat['nama']?>">
		
		<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
		<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
	</form>
</body>
</html>