<?php 
//各かっこ構文で作成/修正
$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // このスクリプトのこの位置に記述した場合、
                // $arr[13] = 56; と同じです

$arr["x"] = 42; // キー"x"の新しい要素を配列に追加します
                
//ここまでの出力
// array(4) {
//     [5]=>
//     int(1)
//     [12]=>
//     int(2)
//     [13]=>
//     int(56)
//     ["x"]=>
//     int(42)
//   }

unset($arr[5]); // 配列から要素を削除します

//出力
// array(3) {
//     [12]=>
//     int(2)
//     [13]=>
//     int(56)
//     ["x"]=>
//     int(42)
//   }


unset($arr);    // 配列全体を削除します
var_dump($arr);//unsetにより出力はなくなる


