<?php

   /**
    * 适配器模式
    */
   interface PrefectMan{
       function cook();
       function writePhp();
   }


   class Wife{
       public function cook(){
         echo '我会做饭';
       }
   }


   class Man implements PrefectMan{

       protected $wife;

       public function __construct($wife)
       {
           $this -> wife = $wife;
       }

       function  cook()
       {
           $this -> wife -> cook();
       }

       public  function writePhp()
       {
           echo '我会写php代码';
       }
   }


   $li = new Wife();
   $ming = new Man($li);
   $ming -> writePhp();
   $ming -> cook();