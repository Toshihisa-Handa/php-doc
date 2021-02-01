<?php
class foo {
    public $value = 42;

    public function &getValue() {
        return $this->value;
    }

    public static function va(){
        echo 'hoge';
    }

 
}

// $obj = new foo;
// $myValue = &$obj->getValue(); // $myValue は $obj->value へのリファレンス、つまり 42 となります
// $obj->value = 2;
// echo $myValue . "\n";                // $obj->value の新しい値である 2 を表示します
// $test = new foo();
// echo $test->value . "\n";
foo::va();