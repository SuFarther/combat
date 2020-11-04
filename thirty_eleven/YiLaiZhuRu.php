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

   $luntai = new LunTai();
   $baoma = new BaoMa($luntai);
   $baoma->run();