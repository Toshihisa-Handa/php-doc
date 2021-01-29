<?php
// == は、boolean型を返す演算子
$action = 'show_version';
$show_separators = true;
if ($action == "show_version") {
    echo "バージョンは1.23です。";
}else{
    echo'hoge';
}

// これは冗長
if ($show_separators == TRUE) {
    echo "<hr>\n";
}

// 上の例は次のように簡単に書くことができます。
if ($show_separators) {
    echo "<hr>\n";
}
?>