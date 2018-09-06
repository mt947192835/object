<?php
/**
在不需要了解内部实现的前提下，遍历一个聚合对象的内部元素
相比于传统的编程模式，迭代器可以隐藏遍历元素的所需的操作
 */
class ArrayContainer implements Iterator{
    protected $data = [];
    protected $index;
    public function __construct($data)
    {
        $this->date = $data;
    }
    public function rewind()
    {
        $this->index = 0;
    }
    public function current(){
        return $this->data[$this->index];
    }
    public function next(){
        $this->index += 2;
    }
    public function key(){
        return $this->index;
    }
    //检查指针是否过界
    public function valid()
    {
        return $this->index < count($this->data);
    }
}
$arr = ["秦","唐","宋","明"];
$container = new ArrayContainer($arr);
foreach ($container as $a=>$value){
    echo "我想去".$value."<br/>";
    //var_dump($value);
}
//var_dump($container);exit;