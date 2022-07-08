<?php
include 'class_mtk.php';

$Lbalok = new balok;
$Lbalok -> Form_luasbalok();

    if (isset($_GET['submit'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        echo "Panjang  &nbsp;= ".$a." Cm<br>";
        echo "Lebar  &nbsp; &nbsp; = ".$b." Cm<br>";
        echo  $Lbalok->luas_balok($a,$b);
    }
    
$Vbalok = new balok;
$Vbalok -> Form_volumebalok();
    if (isset($_GET['volume'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        echo "Panjang  &nbsp;= ".$a." Cm<br>";
        echo "Lebar  &nbsp; &nbsp; = ".$b." Cm<br>";
        echo "tinggi &nbsp; &nbsp; = ".$c."Cm<br>";
        echo  $Vbalok->volume_balok($a,$b,$c);
    }
?>