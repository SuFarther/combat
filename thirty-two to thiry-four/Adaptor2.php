<?php

    interface  Love{
        function  sajiao();
    }


    class Keai implements  Love{

        function sajiao()
        {
            echo '讨厌,你好坏<br/>';
        }
    }

    class Tiger  implements  Love{

        function sajiao()
        {
            echo '给老娘过来<br/>';
        }
    }


   class  Girlfriend{
        protected $xingge;

         function __construct($xingge)
        {
            $this -> xingge = $xingge;
        }


        function  sajiao(){
            $this->xingge->sajiao();
        }
   }

   $keai = new Keai();
   $xiaoli = new Girlfriend($keai);

   $xiaoli -> sajiao();
