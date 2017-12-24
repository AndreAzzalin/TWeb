<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 22/12/2017
 * Time: 18:20
 */

class Home extends Controller {

    //posso passare all'index name e other come parametri
    public function index($name = '',$other = ' ') {
        echo '<br>name= ' . $name . ' other=' . $other;
        print_r($other);
    }

    public function test() {
        echo 'test';
    }
}
