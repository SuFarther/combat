<?php

   //观察者模式涉及到两个类
   //男人类  和女朋友类
   //男人类对象小明  小花、小丽


   class Man{

       //用来存放观察者
       private $observers = [];

       //添加观察者方法
       public  function  addObserver($observer){
          $this->observers[] = $observer;
       }

       //花钱方法
       function  buy(){
           //当被观察者作出这个行为的时候,让观察者得到通知，并且作出一定的反应
           foreach ($this->observers  as $girl){
               $girl -> dongjie();
           }
       }

       //删除观察者方法
       function  delObserver($observer){
           //查找对应值在数组中的键
           $key = array_search($observer,$this->observers);
           //根据键删除值，并且数组重组索引
           array_splice($this->observers,$key,1);
       }
   }


   class GirlFirend{
       function dongjie(){
           echo '你的男朋友正在花钱,现在冻结他的银行卡<br/>';
       }
   }

   $xiaoming = new Man();
   $xiaohua  = new GirlFirend();
   $xiaoli = new GirlFirend();

   $xiaoming -> addObserver($xiaohua);
   $xiaoming -> addObserver($xiaoli);
   $xiaoming -> delObserver($xiaohua);

   $xiaoming->buy();