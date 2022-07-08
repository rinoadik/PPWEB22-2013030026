<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>ta</title>
</head>
<body>
<?php include 'menu_ta.php';?>
<table width='100%' border='1'>
<thead>
<tr>
<th width='5%'>No.</th>
<th width='15%'>id</th>
<th width='25%'>Nama</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM ta";
$res = $conn->query($sql);
if($res->num_rows > 0){
$i = 0;
while($dat = $res->fetch_assoc()){
$i++;
echo "<tr>
<td>$i</td>
<td><a href='ta_detil.php?id=".$dat['id']."'>".$dat["id"]."</td>
<td>".$dat["nama"]."</td>


</tr>";

}
}
?>
</tbody>
</table>
</body>
</html>