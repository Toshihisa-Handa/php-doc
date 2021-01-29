<?php 

echo 'hoge'.PHP_EOL;
echo 'foga'."\n";
echo 'momo'."<br>";
echo 'nori'.'<br>';
echo 'momo'."</br>";
echo 'nori'.'</br>';

//上記ターミナル上の出力結果
// hoge
// foga
// momo<br>nori<br>momo</br>nori</br>

//上記webブラウザじょうの出力結果
// hoge foga momo
// nori
// momo
// nori


// 上記より
// PHP_EOL:ターミナル（可）、web(不可)
// "\n":ターミナル（可）、web(不可)
// <br>,</br>のシングル＆ダブルコート:ターミナル（不可）、web(可)
