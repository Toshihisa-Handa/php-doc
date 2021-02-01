<?php
class C {}
class D extends C {}

// このクラスは C を継承していません
class E {}

function f(C $c) {
    echo get_class($c)."\n";
}

f(new C);
f(new D);

