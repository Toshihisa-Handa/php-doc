<?php 
//以下の$aと$bの配列内容は同じ

$a = array( 'color' => 'red',
            'taste' => 'sweet',
            'shape' => 'round',
            'name'  => 'apple',
            4        // キーは0になる
          );


$b = array();
$b['color'] = 'red';
$b['taste'] = 'sweet';
$b['shape'] = 'round';
$b['name']  = 'apple';
$b[]        = 4;        


var_dump($a);
// 出力
// array(5) {
//     ["color"]=>
//     string(3) "red"
//     ["taste"]=>
//     string(5) "sweet"
//     ["shape"]=>
//     string(5) "round"
//     ["name"]=>
//     string(5) "apple"
//     [0]=>
//     int(4)
//   }

foreach($a as $ates){
  echo "do you like . $ates?\n";
}

//2から始まる配列が作れる
$c = [2=>'a',2,'tes'];
var_dump($c);

$d = [0,4,1,3,2];
sort($d);

var_dump($d);

$obj = (object)['1' =>'foo'];
var_dump(($obj));