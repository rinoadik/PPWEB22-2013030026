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
$balok = new volume();
$hasil=$balok->balok(10,3,20);
echo 'volume balok = '. $hasil.' cm<sup>3</sup>';
?>

