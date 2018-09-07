<?php
class Demo{
    protected $num;
    public function __construct($num)
    {
        $this->num = $num;
    }

    public function __debugInfo()
    {
        return [
            'numSquared' => $this->num ** 2,
        ];
    }
}
var_dump(new Demo(10));