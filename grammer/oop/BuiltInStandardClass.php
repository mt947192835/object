<?php
/**
 * User: mt
 * 内置标准类
 */
$object =  new stdclass();
$object->name = 'mt';
var_dump($object);
echo "<br/>";
//

//转化为对象
//纯字符下标的数组才能转化成对象
$n = null;
$object1 = (object)$n;
var_dump($object1);
//object(stdClass)#1 (0) { }
echo "<br/>";
$s = "mt";
$object2 = (object)$s;
var_dump($object2);
//除了空对象，其他属性名都是scalar
//object(stdClass)#3 (1) { ["scalar"]=> string(2) "mt" }

//类型约束
function test(A $a){

}