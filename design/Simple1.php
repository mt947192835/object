<?php
/**
 * User: mt
 * Date: 2018/9/6
 */
class Simple1{
    static private $db;
    private function __construct()
    {

    }
    private function __clone(){

    }
    static public function getDb()
    {
        if(self::$db){
            return self::$db;
        }else{
            self::$db = new self();
        }
    }
    public function simple(){
        echo 11111;
    }
}
$s = Simple1::getDb();