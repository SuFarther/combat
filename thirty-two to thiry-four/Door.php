<?php


   /*
    * 门面模式实例:打开照相机为例
    * 两部: 打开闪光灯、打开照相机
    * 关闭闪关灯、关闭照相机
    */
class Light{
    function turnOn(){
        echo '打开闪关灯<br/>';
    }

    function turnOff(){
        echo '关闭闪关灯<br/>';
    }
}

class Facade{
    protected $light;
    protected $camera;


    function __construct()
    {
         $this->light = new Light();
         $this->camera = new Camera();
    }


    function start(){
        $this->light->turnOn();
        $this->camera->active();
    }


    function  stop(){
        $this->light->turnOff();
        $this->camera->unactive();
    }
}


class Camera{
    function active(){
        echo '打开照相机<br/>';
    }

    function unactive(){
        echo '关闭照相机<br/>';
    }
}


$f = new Facade();
$f->start();
$f->stop();