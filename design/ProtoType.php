<?php
/**
多用于创建大对象，或初始化繁琐的对象。如游戏中的背景，地图。web中的画布等等
clone的对象指向同一内存空间
 */
class ProtoType{
    public $name;
    public $age;
    public $book;
    public function setAttribute($arr){
        foreach ($arr as $k=>$v){
            $this->$k = $v;
        }
    }
    public function __clone()
    {
        $this->book = clone $this->book;
    }
}
class Book{
    public $book_name = "PHP从入门到放弃";
}
$p1 = new ProtoType();
$book = new Book();
$p1->setAttribute(['name'=>'mt','age'=>30,'book'=>$book]);
$p2 = clone $p1;
$book->book_name = "删库跑路";
$p2->setAttribute(['name'=>'mlt','age'=>29,'book'=>$book]);
echo $p1->name;
echo "<br/>";
echo $p2->name;
echo "<br/>";
echo $p1->book->book_name;
echo "<br/>";
echo $p2->book->book_name;