<?php
//适配器
interface database{
    function connect();
    function select();
    function add();
    function del();
}
class MySql implements database {
    public function connect()
    {
        echo __CLASS__."链接";
    }
    public function select()
    {
        echo __CLASS__."查询";
    }
    public function add()
    {
        echo __CLASS__."添加";
    }
    public function del()
    {
        echo __CLASS__."删除";
    }
}
class Mongodb implements database {
    public function connect()
    {
        echo __CLASS__."链接<br/>";
    }
    public function select()
    {
        echo __CLASS__."查询<br/>";
    }
    public function add()
    {
        echo __CLASS__."添加<br/>";
    }
    public function del()
    {
        echo __CLASS__."删除<br/>";
    }
}
class Adapter{
    public function index()
    {
        $db = new MySql();
        $db->connect();
        $db->del();
        $db->select();
        $db->add();
    }
}
(new Adapter())->index();