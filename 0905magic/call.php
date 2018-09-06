<?php
class Magic{
    protected $arr = [];
    public function __call($name, $arguments)
    {
        var_dump($name,$arguments);
    }
}
$magic = new Magic();
$magic->hello("你好吗");