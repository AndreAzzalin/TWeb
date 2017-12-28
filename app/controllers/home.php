<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 22/12/2017
 * Time: 18:20
 */

class Home extends Controller {

    //posso passare all'index name e other come parametri
    public function index($name = '') {
        //verificare cin setName
        $user = $this->model('User');
        $user->name = $name;
        $this->view('home/index',['name' => $user->name]);
    }

}
