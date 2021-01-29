<?php 

$million = 1000000;
$large_number =  50000000000000 * $million;
var_dump($large_number);         
echo($million);echo'<br>';
echo($large_number);// float(5.0E + 19)
echo 5*((1 * 10)**19);// float(5.0E + 19) :上記と同様 参考；https://oshiete.goo.ne.jp/qa/2601854.html


echo'<br>';
echo'<br>';

$five = 5; //int
var_dump($five);echo'<br>';//2.5 float
$syo = $five / 2;
var_dump($syo);echo'<br>';
// $five = 6; //int
// var_dump($five);echo'<br>';//3 int
// $syo = $five / 2;
// var_dump($syo);echo'<br>';

// $sho = intdiv($five, 2);
// var_dump($sho);echo'<br>';// int(3)
// $five = 5;
// $sho = intdiv($five, 3);
// var_dump($sho);// int(1)

$test = 2.9;
var_dump((int)$test);echo'<br>';//2 (int)でキャストすると小数点を切り捨てる

$test2 = $five/2;
var_dump((int)$test2);//(int)でキャストすると小数点を切り捨てる