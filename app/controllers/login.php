<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 26/12/2017
 * Time: 21:39
 */

class Login extends Controller {

    public function index() {
        //imposto il model
        //imposto la view
        $this->view('login/loginPage');
        //

    }

    function checkLogin($user_nickname = '' ,$user_password = '') {
        $loginManager = $this->model('loginManager');
        /* $user_nickName = trim($_POST['nickname']);
         $user_password = trim($_POST['password']);*/
        //  var_dump('btn: '.isset($_POST['btn-login']));
        // var_dump('nick: '.$_POST['nickname']);
        //var_dump('psw: '.$_POST['password']);
        //var_dump('repsw: '.$_POST['repass']);
        //var_dump('action: '. $_POST['action']);
       // if (isset($_POST['nickname']) && isset($_POST['password'])) {
            $user_nickname = $_POST['nickname'];
           $user_password = $_POST['password'];
            //if (isset($_POST['btn-login'])) {
            $value = $this->sendToModel($loginManager,$user_nickname,$user_password);
            // var_dump($value);
            if ($value) {
                //$this->redirect('http://localhost/TWeb/public/home/','logged in');
                echo 'ok';
          } else
              echo 'psw o nick errati';
        //}
    }


    function sendToModel($loginManager,$user_nickname,$user_password) {

        // $password = md5($user_password);
        if ($loginManager->getLogin($user_nickname,$user_password)) {
            session_start();
            return true;
        }
        return false;
    }


}