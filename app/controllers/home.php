<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 22/12/2017
 * Time: 18:20
 */

class home extends Controller {

        public function index(){
          /*  $user=$this->model('User');
            $user->nickname=$nickname;*/
            echo 'home/index';
        }

        public function test($var=''){
            echo $var.' ciao';
        }
    }
