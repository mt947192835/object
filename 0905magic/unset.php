<?php
class Person{
    public $name = 'mt';
    protected $age = 30;
    private $height = 173;
    public function __unset($content) {
        echo "当在类外部使用isset()函数测定私有成员{$content}时，自动调用<br>";
    }
}
$person = new Person();
unset($person->name);
unset($person->age);
unset($person->height);
echo $person->name;