<?php
class Magic{
    protected $arr = [];
    public function __construct()
    {
        echo "我先执行";
    }

    public function __call($name, $arguments)
    {
        var_dump($name,$arguments);
    }
    public function __destruct()
    {
        echo "我后执行";
    }
}
$magic = new Magic();
