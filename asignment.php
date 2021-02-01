<?php
//初期化
//結合代入演算子を使用する場合は変数を初期化しておきましょう
$sGreeting =        '';
//変数の結合
$sGreeting .=       'こんにちは';
$sGreeting .=       '山田太郎さん';
echo $sGreeting;

$a = '';
$a .= '何歳？';
$a.=3 .'歳です。';

echo $a;
//出力
//何歳？3歳です。