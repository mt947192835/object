<?php
class Magic{
    protected $arr = [];
    public function __toString()
    {
        return "111";
    }
}
$magic = new Magic();
echo $magic;