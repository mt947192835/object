<?php
/**
self：类内指针，就是写在哪个类里边，就调用哪个类里边的方法或属性。
static：使用的这个类会被子类覆盖，使用的是子类的方法或属性，就是说父类访问的是子类的方法或属性。
 */
class A{
    public function __construct()
    {
        self::show();
    }

    static function show(){
        echo "我是A类的show方法";
    }
}
class B extends A{
    static function show(){
        echo "我是B类的show方法";
    }
}
new B();