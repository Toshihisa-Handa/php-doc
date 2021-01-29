<?php
//引用符
echo 'this is a simple string';echo'<br>';

echo 'You can also have embedded newlines in 
strings this way as it is
okay to do';echo'<br>';

// 出力: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';echo'<br>';

// 出力: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';echo'<br>';

// 出力: You deleted C:\*.*?
echo 'You deleted C:\*.*?';echo'<br>';

// 出力: This will not expand: \n a newline
echo 'This will not expand: \n a newline';echo'<br>';

// 出力: Variables do not $expand $either
echo 'Variables do not $expand $either';echo'<br>';

echo "<hr>\n";

echo gettype('Hello')."<br/>"; //文字列型のリテラル値
echo gettype("Hello")."<br/>\n"; //文字列型のリテラル値
echo gettype('I\'m feeling lucky')."<br/>\n"; //文字列型のリテラル値

// \nで改行
echo 'test1'.'\n';
echo 'test2'."\n";

// \tでタブ表示
echo 'test3'.'\t'.'test3-2'."\n";
echo 'test4'."\t".'test4-2'."\n";

//上記出力結果：test1\ntest2 test3\ttest3-2 test4 test4-2
//シングルコートで囲うとバックスラッシュは表示される。ダブルコートだとスペースになる