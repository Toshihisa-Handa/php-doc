<?php 
//strとintを掛け合わせた時の型の推移

echo $tes ."\n";// 1
echo $tes2 ."\n";// 1
echo $tes3 ."\n";// 2
echo $tes4 ."\n";// 11

var_dump($tes)."\n";// int(1)
var_dump($tes2) ."\n";// string(1) "1"
var_dump($tes3) ."\n";// int(2)
var_dump($tes4) ."\n";// string(2) "11"