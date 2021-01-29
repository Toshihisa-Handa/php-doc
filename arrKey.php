<?php 
//配列の作り方。キーを設定するとインデックスで呼べなくなる点注意。


//例１＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
$scores = [100, 50, 70];
var_dump($scores);

//出力
// array(3) {
//     [0]=>
//     int(100)
//     [1]=>
//     int(50)
//     [2]=>
//     int(70)
//   }

echo $scores[1].PHP_EOL;// 50



//例２＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
$animals= [
    'one'  =>'neko',
    'two'  =>'inu',
    'three'=>'tori',
];
var_dump($animals);

//出力
// array(3) {
//     ["one"]=>
//     string(4) "neko"
//     ["two"]=>
//     string(3) "inu"
//     ["three"]=>
//     string(4) "tori"
//   }
echo $animals[1].PHP_EOL;// エラーが出る
echo $animals['two'].PHP_EOL;// inu



//例３＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
$mix = [50,'inu','three'=>'tori', 'four'=>70];
var_dump($mix);

//出力
// array(4) {
//     [0]=>
//     int(50)
//     [1]=>
//     string(3) "inu"
//     ["three"]=>
//     string(4) "tori"
//     ["four"]=>
//     int(70)
//   }

//例4＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

$keyNull = [
    null => 'ヌルです',
    false => 'フォルスです',
    true => 1
];

var_dump($keyNull).PHP_EOL;

echo $keyNull[''].PHP_EOL;
echo $keyNull[""].PHP_EOL;

//出力
// array(3) {
//     [""]=>
//     string(12) "ヌルです"
//     [0]=>
//     string(18) "フォルスです"
//     [1]=>
//     int(1)
//   }
//   ヌルです
//   ヌルです

// nullをキーにすると「""」が適用される。
// 呼び出すときは「""」も「''」も双方使用可能。