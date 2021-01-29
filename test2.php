<?php 



$foo = '3bar';
$hoge = true;
$su = 55;
$tes = '44a4a5a';
var_dump($foo); echo '<br>';
var_dump($hoge); echo '<br>';
var_dump($su); echo '<br>';
var_dump($tes); echo '<br>';

settype($foo, 'integer');
settype($hoge, 'string');
settype($tes, 'int');

var_dump($foo); echo '<br>';
var_dump($hoge); echo '<br>';
echo($hoge); echo '<br>';
var_dump($tes); echo '<br>';
