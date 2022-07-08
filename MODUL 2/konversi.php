<?php
include 'class_mtk.php';

$grade = new konversi;
$grade->Form_konversi();

    if (isset($_GET['cek'])){
        echo 'Nilai : ';
        echo $_GET['nilai'];
        echo "<br>Dikonversi : ";
        $x=$grade ->nilai($_GET["nilai"]);
        echo $grade->rumus();
    }

?>