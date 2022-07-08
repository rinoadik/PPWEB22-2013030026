<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>ta</title>
</head>
<body>
<?php include 'menu_krs.php';?>
<table width='100%' border='1'>
<thead>
<tr>
<th width='5%'>No.</th>
<th width='15%'>id</th>
<th width='25%'>mhs_npm</th>
<th width='25%'>mk_kode</th>
<th width='25%'>semeter</th>
<th width='25%'>ta_id</th>
<th width='25%'>nilai</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM krs";
$res = $conn->query($sql);
if($res->num_rows > 0){
$i = 0;
while($dat = $res->fetch_assoc()){
$i++;
echo "<tr>
<td>$i</td>
<td><a href='krs_detil.php?id=".$dat['id']."'>".$dat["id"]."</td>
<td>".$dat["mhs_npm"]."</td>
<td>".$dat["mk_kode"]."</td>
<td>".$dat["semester"]."</td>
<td>".$dat["ta_id"]."</td>
<td>".$dat["nilai"]."</td>


</tr>";

}
}
?>
</tbody>
</table>
</body>
</html>