<?php
include("Simple1.php");
include("RegisterTree.php");
class DbFactory{
    static public function DB(){
        $sim = Simple1::getDb();
        RegisterTree::set('db',$sim);
    }
}