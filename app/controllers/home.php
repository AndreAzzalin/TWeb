<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 22/12/2017
 * Time: 18:20
 */

class Home extends Controller {

    //posso passare all'index name e other come parametri
    public function index($nickname='',$psw = '') {


        session_start();
        if(!isset($_SESSION['nickname'])){
            $_SESSION['nickname'] = $nickname;
        }


        //verificare cin setName
        // $user = $this->model('User');
        //$user->nickname = $nickname;
        //$user->psw = $psw;
        $this->view('home/index',['nickname' => $nickname]);


    }

}
