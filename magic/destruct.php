<?php
/**
 * User: mt
 * Date: 2018/9/7
 */
class Test{
    public $age;
    public function __construct($age)
    {
        $this->age = $age;
    }

    public function __destruct(){
        echo "我被销毁了";
    }
}
$a = new Test(15);
