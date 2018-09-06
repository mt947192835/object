<?php
/**
策略模式，将一组特定的行为和算法封装成类，以适应某些特定的上下文环境
加入一个电商网站，根据男性女性跳转到不同的类目，并且所有的广告位显示不同的广告i
 */
interface People{
    function computer();
    function mobile();
    function clothes();
}
class Men implements People{
    public function computer()
    {
        echo __CLASS__.'电脑';
    }
    public function mobile()
    {
        echo __CLASS__."手机";
    }
    public function clothes(){
        echo  __CLASS__."衣服";
    }
}
class Women implements People{
    public function computer()
    {
        echo __CLASS__.'电脑';
    }
    public function mobile()
    {
        echo __CLASS__."手机";
    }
    public function clothes(){
        echo  __CLASS__."衣服";
    }
}
class Strategic{
    public function index(){
        $request = isset($_GET['keyworder'])?$_GET['keyworder']:"women";
        if($request == 'men'){
            $people = new Men();
        }else{
            $people = new Women();
        }
        $people->clothes();
        $people->mobile();
        $people->computer();
    }
}
(new Strategic())->index();