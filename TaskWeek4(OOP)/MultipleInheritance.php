<?php


class A {
    public function MethodA() {
        echo "Class named A <br>";
    }
}

class B extends A {
    public function MethodB() {
        echo "Class named B <br>";
    }
}

class C extends B {
    public function MethodC() {
        echo "Class named C <br>";
    }
}

$obj_c = new C();
$obj_c->MethodA();
$obj_c->MethodB();
$obj_c->MethodC();
