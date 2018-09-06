<?php
/**
 * 装饰器模式
 * 允许向一个已有的对象添加新的功能或部分内容，同时又不改变其结构。属于结构型模式，它是作为现有的类的一个包装。
 */
interface Decorator{
    function before();
    function after();
}
class police implements Decorator{
    public function before()
    {
        echo "穿上衬衫<br/>";
    }
    public function after()
    {
        echo "穿上警察服<br/>";
    }
}
class doctor implements Decorator{
    public function before()
    {
        echo "穿上内部防护服<br/>";
    }
    public function after()
    {
        echo "穿上外部防护服<br/>";
    }
}
class Person implements Decorator {
    protected $person = [];
    public function addPer($object){
        $this->person[] = $object;
    }
    public function before()
    {
        foreach ($this->person as $person){
            $person->before();
        }
    }
    public function after()
    {
        foreach ($this->person as $person){
            $person->after();
        }
    }
    public function main(){
        $this->before();
        echo "穿上长衫<br/>";
        $this->after();
    }
}
$person = new Person();
$person->addPer(new police());
$person->addPer(new doctor());
$person->main();