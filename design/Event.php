<?php
/**
当一个对象状态发生改变时，依赖他的对象全部会收到消息，并自动更新
场景：一个事件发生，要执行一连串操作，
观察者模式，实现了低耦合，非侵入式的通知与更新机制
//PHP里边对象的比较
当使用对比操作符(==)比较两个对象变量时，比较的原则是：如果两个对象的属性和属性值 都相等，而且两个对象是同一个类的实例，那么这两个对象变量相等。
而如果使用全等操作符(===)，这两个对象变量一定要指向某个类的同一个实例（即同一个对象）。
 */
class Event{
    static public $object = [];
    public function addObject($object){
        self::$object[] = $object;
    }
    public function delObject($object){
        $key = array_search($object,self::$object);
        if($key){
            if($object === self::$object[$key]){
                unset(self::$object[$key]);
                echo "删除该对象";
            }else{
                echo "不是同一个对象，无需删除";
            }
        }else{
            echo "不存在对象，无需删除";
        }
    }
    public function notify(){
        if(self::$object){
           foreach (self::$object as $object){
               $object->update();
           }
        }else{
            echo "没有要通知的对象";
        }
    }
}
interface Subject{
    function update();
}
class Web implements Subject{
    public function update()
    {
        echo __CLASS__."做出修改".PHP_EOL;
    }
}
class App implements Subject{
    public function update()
    {
        echo __CLASS__."做出修改".PHP_EOL;
    }
}
class WeChat implements Subject{
    public function update()
    {
        echo __CLASS__."做出修改".PHP_EOL;
    }
}
$event = new Event();
$event->addObject(new Web());
$event->addObject(new App());
$event->addObject(new WeChat());
$event->notify();