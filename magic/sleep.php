<?php
class Person{
    public $name = 'mt';
    protected $age = 30;
    private $height = 173;
    public function __sleep() {
        //$this->name = base64_encode($this->name);
        return array('name', 'age'); // 这里必须返回一个数值，里边的元素表示返回的属性名称
    }
    public function __wakeup()
    {
        echo "对象被反序列化时调用";
    }
}
$person = new Person();
$person1 =  serialize($person);

unserialize($person1);