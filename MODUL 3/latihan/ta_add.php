<!DOCTYPE html>
<html>
<head>
<title>mk add</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<?php include 'header.php';?>
	<?php include 'menu_ta.php';?>
	<br>
	<form name="myform" action="ta_proc.php" method="POST">
		id
		<br><input type="text" name="id" id="id">
		<br>Nama
		<br><input type="text" name="nama" id="nama" size="30">
		
		<br>
		<br><input type="submit" name="submit_add" id="submit_add" value="SIMPAN" class="btn btn-primary">
	</form>
</body>
</html>