<?php
$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".PHP_EOL;
echo "He drank some $juices[1] juice.".PHP_EOL;
echo "He drank some $juices[2] juice.".PHP_EOL;
echo "He drank some $juices[koolaid1] juice.".PHP_EOL;

var_dump($juices);
var_dump(array_values($juices));
//出力
// array(3) {
//     [0]=>
//     string(5) "apple"
//     [1]=>
//     string(6) "orange"
//     [2]=>
//     string(6) "purple"
//   }

// array_values()によって配列のインデックスが初期化された
// キーの割り当てを解除したい場合などに有用