<?php

     interface  Skill{
       public function family();
       public function buy();
    }


   class Person implements Skill{

       public function family()
       {
           echo '人们去砍树<br/>';
       }

       public function buy()
       {
          echo '人们去买房';
       }
   }

   class  Jingling implements  Skill{

       public function family()
       {
           echo '精灵在砍树<br/>';
       }

       public function buy()
       {
          echo '精灵在买精灵币';
       }
   }


   class Factory{
         static function createHero($type){
             switch ($type){
                 case 'person':
                     return new Person();
                     break;
                 case 'jingling':
                     return new Jingling();
                     break;
             }
         }
   }


   $person = Factory::createHero('person');
   $jingling = Factory::createHero('jingling');