<?php 

function cal(){
    echo 'hello';
}

call_user_func('cal'); 


function test($kamoku){
    echo "$kamoku".'ですね';
}

call_user_func('test','数学');


// タイプ 6: __invoke を実装したオブジェクトを callable として用いる
class C {
    public function __invoke($name) {
        echo 'Hello ', $name, "\n";
    }
}

$c = new C();
call_user_func($c, 'PHP!');

