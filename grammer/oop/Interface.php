<?php
/**
1 不能够定义静态变量（常量除外）
2 定义的常量 const YOUCONST = VALUE,不能在子类中覆盖，在子类中以 interfaceName::YOUCONST的方式调用
3 不能使用parent::YOUCONST的方式调用接口的常量
4.接口定义的是规范,规定下一级要做什么
抽象类定义的是模型
 */
interface Inte{
    const AGE=18;
    function test001();
}
class A implements Inte{
    public function __construct()
    {
        echo Inte::AGE;//不能使用parent::YOUCONST的方式调用接口的常量
    }

    public function test001()
    {
        // TODO: Implement test001() method.
    }
}
new A();