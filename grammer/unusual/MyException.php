<?php
class MyException extends Exception{
    public function getInfo()
    {
        return "自定义错误信息";
    }
}
try{
    throw new MyException('error');
}catch(Exception $e){
    echo $e->getInfo();
}