<?php


class constructTest {
    public function __construct()
    {
        echo 'クラスを読み込みました。初期化します';
    }
}

$cTest = new constructTest();
echo "\n";
$tes = 1;
$tes2 = '1';
$tes3 = 1 + '1';
$tes4 = 1 .'1';


