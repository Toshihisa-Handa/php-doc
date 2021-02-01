<?php 

function ifTest($a,$b){
    if($a == $b){
        return 0;
    }
    return($a<$b) ? -1 : 1;// aがbより小さければ-1を返し、大きければ1を返す
}


// echo ifTest(5,3);

$a = array(3, 2, 5, 6, 1);

usort($a, "iftest");//ここで第二引数に関数を設定しコールバックとして配列の整列をしている。


var_dump($a);

foreach($a as $test){
    echo "これは{$test}です\n";
}

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}