<?php
include 'class_mtk.php';

$bola = new bola;
$bola -> Form_luasbola();

if (isset($_GET['r'])){
    $r = $_GET['r'];
    echo "Jari-jari  &nbsp;= ".$r." Cm<br>";
    echo  $bola -> luas_bola($r);
    echo $bola -> volume_bola($r);
}
?>