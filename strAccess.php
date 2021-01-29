<?php 

$ja = 'これは文字のテストです。確認しましょう。';
$en = 'this is str test. Let is check now';

var_dump($ja);
echo PHP_EOL;
var_dump($en);
echo "\n";
$test1 = $ja[2];
$test2 = $en[2];
$test3 = $en[0];
$test4 = $en[-1];
$test5 = $en[-2];
echo "テスト1". $test1 ."\n";//$test1は表示されない
echo "テスト2". $test2 ."\n";//３番目の文字「i」が取得できる
echo "テスト3". $test3 ."\n";//0番目の文字「t」が取得できる
echo "テスト4". $test4 ."\n";//後ろから0番目の文字「w」が取得できる
echo "テスト5". $test5 ."\n";//後ろから2番目の文字「o」が取得できる
