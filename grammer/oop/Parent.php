<?php
/**
 * User: mt
 * Date: 2018/9/7
 */
class A{
    function run()
    {
        echo "我在父类A中运行";
    }
}
class B extends A{
    public function __construct()
    {
        //使用父类的"静态类"成员
        parent::run();
    }
}
new B();