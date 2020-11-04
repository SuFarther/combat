<?php

   interface  Tell{
       public function cell();
       public function answer();
   }

   class Xiaomi implements  Tell{

       public function cell()
       {
          echo '小米手机正在打电话';
       }

       public function answer()
       {
           echo '小米手机正在回复电话';
       }
   }

   class Huawei implements  Tell{

       public function cell()
       {
           echo  '华为手机正在打电话';
       }

       public function answer()
       {
           echo '小米手机正在回复电话';
       }
   }


   //工厂类只负责规定接口,具体的实现交给子类
   interface Factory{
       static function createPhone();
   }


   class XiaomiFactory  implements  Factory{

       static function createPhone()
       {
           return new Xiaomi();
       }
   }

   class HuaweiFactory implements  Factory{

       static function createPhone()
       {
          return new Huawei();
       }
   }


   $xiaomi = new XiaomiFactory();
   var_dump($xiaomi::createPhone());

