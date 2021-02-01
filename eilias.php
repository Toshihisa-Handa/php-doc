<?php 
//注意すべき重要な点として、名前のある変数のみが参照により代入できる という

$hello = 'こんにちは';
$aisatu = &$hello;
$aisatu = "goodmorning $aisatu";
echo $aisatu;
echo $hello;


$hello = 'グー殿だーぐ';
echo $aisatu;
echo $hello;

$aisatu = 'アニョハせよ';
echo $aisatu;
echo $hello;

//元の変数を変えてもエイリアスを変えても両方変わってしまう。

