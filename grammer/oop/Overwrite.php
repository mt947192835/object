<?php
/*
 * private方法重写
 * 重写的参数必须一致
 */
class A{
    public function run(){
        $this->Test001();
    }
    //private function Test001($a){问题一
    public function Test001($a){
        echo "A类的Test001参数为：".$a;
    }
}
class B extends A{
    //public function Test001($a,$b){问题2
    //protected function Test001($a){问题3访问控制的权限不应该低于上一级的权限
    public function Test001($a){
        echo "B类的Test001".$a;
    }
}
$b = new B();
$b->run();