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
}
$demo = new Demo();
$demo->run();