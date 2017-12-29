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
        $loginManager = $this->model('loginManager');
        //imposto la view
        $this->view('login/loginPage');
        //
        if (isset($_POST['btn-login'])) {

            if ($this->sendToModel($loginManager)) {
                $this->redirect('http://localhost/TWeb/public/home/','logged in');
            }
        }
    }

    function sendToModel($loginManager) {
        $user_nickName = trim($_POST['nickname']);
        $user_password = trim($_POST['password']);
        session_start();
        // $password = md5($user_password);
        if ($loginManager->getLogin($user_nickName,$user_password)) {
            return true;
        }
        return false;
    }

}