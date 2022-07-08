<?php
 class volume{
    public $phi = 3.14;
    function balok($l,$t,$p){
         $vol = $p*$l*$t;
         return $vol;
    }
    function bola($r){
         $vol = 4/3*$this->phi*pow($r,3);
         return $vol;
    }
}
$bola = new volume();
$d=30;
$hasil = $bola->bola($d);
echo 'diameter = '.$d.' cm <br>';
echo 'volume = '.$hasil.' cm<sup>3</sup>';
?>