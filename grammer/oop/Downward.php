<?php
/**
 * User: mt
 * Date: 2018/9/10
 */
class A{
    function run1(){
        echo get_class($this);
        echo "<br/>";
        B::runb();
    }
}
class B{
    public static function runb(){
        echo get_class();
    }
}
(new A)->run1();