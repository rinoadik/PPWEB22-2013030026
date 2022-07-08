<?php
include "koneksi.php";
?><!DOCTYPE html>
<html>
<head>
<title>krs add</title>
</head>
<body>
	<?php include 'header.php';?>
	<?php include 'menu_krs.php';?>
	<br>
	<form name="myform" action="krs_proc.php" method="POST">
		id
		<br><input type="text" name="id" id="id">
		<br>
		npm :<br>
		<select name="npm">
            <?php
            $sql = "SELECT npm,nama FROM mhs";
            $res = $conn->query($sql);
            while ($rows = $res->fetch_array(MYSQLI_BOTH)) {
                echo "<option value='" . $rows['npm'] . "'>" . $rows['npm'] .'-'. $rows['nama'] ."</option>";
            }
            ?>
        </select><br>

		<br>Mata kuliah
		<br>
		<select name="matkul">
            <?php
            $sql = "SELECT kode,nama FROM mk";
            $res = $conn->query($sql);
            while ($rows = $res->fetch_array(MYSQLI_BOTH)) {
                echo "<option value='" . $rows['kode'] . "'>" . $rows['kode'] .'-'. $rows['nama'] ."</option>";
            }
            ?>
        </select>
		
		<br>Semester
		<br>
		<select name="semester" required>
			<option value="">pilih semester</option>
			<option value="ganjil">ganjil</option>
			<option value="genap">genap</option>
			</select>
		<br>Tahun Ajaran
		<br>
		<select name="ta">
            <?php
            $sql = "SELECT id,nama FROM ta";
            $res = $conn->query($sql);
            while ($rows = $res->fetch_array(MYSQLI_BOTH)) {
                echo "<option value='" . $rows['id'] . "'>". $rows['nama'] ."</option>";
            }
            ?>
        </select>
		
		
		<br>Nilai
		<br><input type="text" name="nilai" id="nilai" size="10">
		<br>
		<br><input type="submit" name="submit_add" id="submit_add" value="SIMPAN" class="btn btn-primary">
	</form>
</body>
</html>