<?php
/**
 * User: mt
 * Date: 2018/9/6
 */
include('Simple1.php');
class RegisterTree{
    protected static $arr=[];
    static public function set($object_key,$object_val)
    {
        self::$arr[$object_key] = $object_val;
    }
    static public function get($object_name)
    {
        return self::$arr[$object_name];
    }
    static public function un_set($object_name)
    {
        unset(self::$arr[$object_name]);
    }
}
$db = Simple1::getDb();
RegisterTree::set('db',$db);
var_dump(RegisterTree::get('db'));
RegisterTree::un_set('db');
var_dump(RegisterTree::get('db'));