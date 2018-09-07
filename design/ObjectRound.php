<?php
/**
 * User: mt
 * Date: 2018/9/7
 */
class ObjectRound{
    protected $name = 'mt';
    protected $age = 18;
    protected $height = 173;
    public function __construct()
    {
        foreach ($this as $key=>$val){
            echo $key."的值:".$val."<br/>";
        }
    }
    public function test001(){

    }
    public function test002(){

    }
}
new ObjectRound();