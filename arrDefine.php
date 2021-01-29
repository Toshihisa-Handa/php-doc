<?php 

// $arr = ['neko'=>'nyan', 'inu'=>'wan'];
// var_dump($arr);

// //出力
// // array(2) {
// //     ["neko"]=>
// //     string(4) "nyan"
// //     ["inu"]=>
// //     string(3) "wan"
// //   }

// define('neko','inu');
// print $arr[neko];

// $arr = array('fruit' => 'apple', 'veggie' => 'carrot');
// print_r($arr);
// define('fruit', 'veggie');
// print $arr['fruit']."\n";  // apple
// print $arr[fruit]."\n";    // carrot
// print_r($arr);

define("CONSTANT", "Hello world.");
echo CONSTANT; // "Hello world." を出力します
echo Constant; // "Constant" を出力し、警告が発生します
echo "CONSTANT"; // "COMSTAMT" を出力します