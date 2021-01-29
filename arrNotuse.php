<?php
//現在理解出来ていない↓


error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
// 単純な配列
$array = array(1, 2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nChecking $i: \n";
    echo "Bad: " . $array['$i'] . "\n";
    echo "Good: " . $array[$i] . "\n";
    echo "Bad: {$array['$i']}\n";
    echo "Good: {$array[$i]}\n";
}
