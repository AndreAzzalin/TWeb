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
        //inizializzo una sessione appena si accede all'homepage del sito
   session_start();
   var_dump($_SESSION);

    }

    //verifico se l'utente vuole registrarsi o fare il login
    function getAction() {
        if ($_POST['action'] == 'signin') {
            $this->signIn();
        }
        if ($_POST['action'] == 'signup') {
            echo 'registrazione';
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
            if ($loginManager->getLogin($user_nickname,$user_password)) {
                //$this->redirect('http://localhost/TWeb/public/home/','logged in');
                //var_dump(   $_SESSION['nickname']);
                $_SESSION['nickname'] =$user_nickname;
                echo 'ok';

            } else
                echo 'psw o nick errati';
        }
    }


}