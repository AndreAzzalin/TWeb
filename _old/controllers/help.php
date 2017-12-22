<?php
    /**
     * Created by PhpStorm.
     * User: andrea
     * Date: 20/12/2017
     * Time: 17:21
     */
    class Help{
        function __construct() {
            echo 'inside help <br>';
        }


        public function other($arg = false){
            echo 'inside other <br>';
            echo'optional'.$arg.'<br>';
        }
    }



