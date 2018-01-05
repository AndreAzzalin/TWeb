<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 26/12/2017
 * Time: 21:39
 */

class Login extends Controller {

    public function index() {
        //imposto la view
        $this->view('login/loginPage');
    }

    //verifico se l'utente vuole registrarsi o fare il login
    function getAction() {
        if ($_POST['action'] == 'signin') {
            $this->signIn();
        }
        if ($_POST['action'] == 'signup') {
            $this->signUp();
        }
    }

    function signIn() {
        $loginManager = $this->model('loginManager');
        /* $user_nickName = trim($_POST['nickname']);
        $user_password = trim($_POST['password']);*/
        //  var_dump('btn: '.isset($_POST['btn-login']));
        // var_dump('nick: '.$_POST['nickname']);
        //var_dump('psw: '.$_POST['password']);
        //var_dump('repsw: '.$_POST['repass']);
        //var_dump('action: '. $_POST['action']);
        if (isset($_POST['nickname']) && isset($_POST['password'])) {
            $user_nickname = $_POST['nickname'];
            $user_password = $_POST['password'];
            //chiedo al metodo del model di verificare le credenziali sul db
            if ($loginManager->checkCredential($user_nickname,$user_password)) {
                $this->sec_session_start();
                $_SESSION['User'] = $user_nickname;
                echo 'signin';
            } else
                echo 'Password o nickname errati';
        }
    }

    function signUp() {
        $loginManager = $this->model('loginManager');
        if (isset($_POST['nickname']) && isset($_POST['password']) && isset($_POST['repass'])) {
            $user_nickname = $_POST['nickname'];
            $user_password = $_POST['password'];
            $response = $loginManager->register($user_nickname,$user_password);
            if ($response == 1) {
                echo 'signup';
            } else if ($response === 'UAE') {
                echo 'Utente già registrato';
            }
        }
    }


}