<?php
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
var_dump($b);
//上記出力結果
//  array(5) {
//     [0]=>
//     int(1)
//     [1]=>
//     int(8)
//     [2]=>
//     int(27)
//     [3]=>
//     int(64)
//     [4]=>
//     int(125)
//   }



//型宣言をすると型の変更ができる（以下の例ではstring)
 function sikaku($x,$y):string
 {
     return ($x * $y);
 }

 $c = [3,4,5,6,7];

 $e = array_map('sikaku',$a,$c);

 var_dump($e);

//  上記の出力結果

//   array(5) {
//     [0]=>
//     string(1) "3"
//     [1]=>
//     string(1) "8"
//     [2]=>
//     string(2) "15"
//     [3]=>
//     string(2) "24"
//     [4]=>
//     string(2) "35"
//   }