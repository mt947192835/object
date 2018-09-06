<?php
include("Simple1.php");
class DbFactory{
    static public function DB(){
        $sim = Simple1::getDb();
        $sim->simple();
    }
}
DbFactory::DB();