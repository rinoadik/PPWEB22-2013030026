<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql = "SELECT * FROM krs WHERE id='$id'";
$res = $conn->query($sql);
$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>krs edit</title>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
-->
</head>
<body>
	<?php include 'header.php';?>
	<?php include 'menu_krs.php';?>
	<br>
	<form name="myform" action="krs_proc.php" method="POST">
		Id
		<br><input type="text" name="id" id="id" value="<?php echo $dat['id']?>">
		<br>Npm
		<br>
		
		<select name="mhs_npm" id="id" value="<?php echo $dat['mhs_npm']?>">
            <?php 
			$sql = "SELECT * FROM mhs";
			$res = $conn->query($sql);
			while($mhs = $res->fetch_array(MYSQLI_BOTH)){
				if($mhs['npm']==$row['mhs_npm'])
					$select = 'selected="selected"';
				else
					$select = '';
				echo "<option value='".$mhs['id']."' $select>".$mhs['npm']." - ".$mhs['nama']."</option>";
			}
		?>
        </select>
		
		<br>Mata Kuliah
		<br><input type="text" name="mk" id="mk" size="30" value="<?= $dat['mk_kode']?>">
		<br>Semester
		<br><input type="text" name="sem" id="sem" size="30" value="<?= $dat['semester']?>">
		<br>Tahun Ajaran
		<br><input type="text" name="ta" id="ta" size="30" value="<?= $dat['ta_id']?>">
		<br>Nilai
		<br><input type="text" name="nilai" id="nilai" size="30" value="<?= $dat['nilai']?>">
		<br>
		<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
		<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
	</form>
</body>
</html>