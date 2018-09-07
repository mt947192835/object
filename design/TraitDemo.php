<?php
trait TraitDemo{
    public function run(){
        echo "运行的是traitDemo里的方法";
    }
}
class Father{
    public function run(){
        echo "运行的是father里的方法";
    }
}
class Demo extends Father{
    use TraitDemo;
//    public function run(){
//        echo "运行的是自己里的方法";
//    }
}
$demo = new Demo();
$demo->run();