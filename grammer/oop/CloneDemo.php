<?php
/**
 * User: mt
 * Date: 2018/9/7
 */
class A{
    public $age = 10;
}
$a = new A();
$b =clone $a;
$a->age = 30;
var_dump($a);
echo "<br/>";
var_dump($b);