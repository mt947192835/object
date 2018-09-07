<?php
class Magic{
    protected $arr = [];
    public function __toString()
    {
        return "111";
    }
    public function __invoke($name)
    {
        echo $name."我是个对象，不是函数";
    }
}
$magic = new Magic();
$magic("测试");