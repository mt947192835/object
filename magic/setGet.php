<?php
class Magic{
    protected $arr = [];
    public function __set($name, $value)
    {
        $this->arr[$name] = $value;
    }
    public function __get($name)
    {
        return $this->arr[$name];
    }
    public function __call($name, $arguments)
    {
        var_dump($name,$arguments);
    }
}
$magic = new Magic();
$magic->hello = 'world';
echo $magic->hello;