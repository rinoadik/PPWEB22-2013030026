<?php
/*
$a="clue";
$a.="get";
echo $a;



$color ="maroon";
$var = $color;
echo $var;

echo "\$x";
$user = array("ashley","bale","shrek","blank");
for ($x=0;$x<count($user);$x++){
    if($user[$x] == "shrek") continue;
    print ($user[$x]);
}*/

$foo = 'bob';
$bar = &$foo;
$bar = "my name is $bar";
echo $bar;
echo $foo;
?>