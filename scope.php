<?php 
//関数内でグローバルスコープを使う練習

// 例１＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
// $a = 3;
// $b = 5;
// $c = 7;

// echo $a+$b ."\n";


// function sum($x,$y){
//     return $x+$y;
// }

// echo sum($a,$c) . "\n";

// function tasu(){
//     global $a,$b,$c;
//     return $a + $b + $c;
// }

// echo tasu();


// 例２＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
// function hoge(){
//     $count = 0;
//     echo $count . "\n";
//     $count ++;

// }
// hoge();//0
// hoge();//0
// hoge();//0

// function hoge2(){
//     //staticをつけるとファイル中で関数を呼ばれた際に値を保持する。
//     static $count = 0;
//     echo $count . "\n";
//     $count ++;

// }
// hoge2();//0
// hoge2();//1
// hoge2();//2




// 例３＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
// function test()
// {
//     static $count = 0;

//     $count++;
//     echo $count;
//     if ($count < 10) {
//         test();
//     }
//     $count--;
// }

// test();//12345678910



// 例４＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
// function foo(){
//     static $int = 0;          // 正しい
//     static $int = 1+2;        // 正しい
//     static $int = 5;        // 正しい
//     static $int = 'ほげ';        // 正しい
//     // static $int = sqrt(121);  // 間違い（関数を使っています）

//     // $int++;
//     $int .= 'だよ';
//     echo $int ."\n";
// }
// foo();//ほげだよ
// foo();//ほげだよだよ
// foo();//ほげだよだよだよ


function &hoge1() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        $new = new stdclass;
        // Assign a reference to the static variable
        $obj = &$new;
    }
    if (!isset($obj->property)) {
        $obj->property = 1;
    } else {
        $obj->property++;
    }
    return $obj;
}

function &fugo1() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        $new = new stdclass;
        // Assign the object to the static variable
        $obj = $new;
    }
    if (!isset($obj->property)) {
        $obj->property = 1;
    } else {
        $obj->property++;
    }
    return $obj;
}

$obj1 = hoge1();
$still_obj1 = hoge1();
echo "\n";
$obj2 = fugo1();
$still_obj2 = fugo1();