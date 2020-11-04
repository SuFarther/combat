<?php

class LunTai{

    function roll(){
        echo '轮胎在滚动<br/>';
    }
}

class BaoMa{
    protected $luntai;

    //注入的方法
    function __construct($luntai)
    {
        $this->luntai = $luntai;
    }


    function  run(){
        $this->luntai->roll();
        echo '宝马在轮胎滚动的时候吃烤串';
    }
}



class Container{

    //绑定所绑定的类
    static  $register = [];

    //绑定函数 Closure闭包
    static function bind($name,Closure $closure){
        self::$register[$name] = $closure;
    }

    //创建对象函数
    static function  make($name){
        $col = self::$register[$name];
        return $col();
    }
}

Container::bind('luntai',function (){
    return new LunTai();
});

Container::bind('baoma',function (){
    return new BaoMa(Container::make('luntai'));
});

$baoma = Container::make('baoma');
$baoma->run();