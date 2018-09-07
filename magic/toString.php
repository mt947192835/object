<?php
class Magic{
    protected $arr = [];
    public function __toString()
    {
        return "尝试输出对象时，提示信息：这是魔术方法toString方法";
    }
}
$magic = new Magic();
echo $magic;