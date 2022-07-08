<?php

class Mobil {
  public $name ='Xenia ';
  protected $color ='Hitam ';
  private $bbm='bensin ';

  function nama(){
      echo $this->name;
  }

  function color(){
      echo $this->color;

  }
  function bbm(){
    echo $this->bbm;
}

}
$mbl = new Mobil();
$mbl->nama();
$mbl->color();
$mbl->bbm();
?>