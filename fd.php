<?php
$a = 1.234; 
$b = 1.2e3; 
$c = 7E-10;
$d = 1_234.567; // PHP 7.4.0 以降



echo $a; echo'<br>';//1.234
echo $b; echo'<br>';//1200
echo $c; echo'<br>';//7.0E-10
echo $d; echo'<br>';//1234.567
 

$e = $d + 123;
echo $e; echo'<br>';//1357.567

$f = $d + 1_2_3;
echo $f; echo'<br>';//1357.567

$g = $d + 1_23;
echo $g; echo'<br>';//1357.567
echo'<br>';
echo'<br>';
echo "<hr>\n";


$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if(abs($a-$b) < $epsilon) {
    echo "true";
}

echo "<hr>\n";

var_dump($a, $b, 'hoge');echo'<br>';
var_dump(is_nan($a), $b, 'hoge',is_nan(5));echo'<br>';
