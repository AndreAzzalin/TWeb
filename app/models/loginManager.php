<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 26/12/2017
 * Time: 21:46
 */

class LoginManager {

    public function getlogin() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $action = $_POST['action'];
            $nickname = $_POST['nickname'];
            $psw = $_POST['password'];

            if ($action == 'signin') {

                if (isset($nickname) && isset($psw)) {

                    if ($nickname == 'admin' && $psw == 'admin') {
                        return 'login';
                    } else {
                        return 'invalid user';
                    }
                }
            }

            if ($_POST['action'] == 'signup') {

                if (isset($nickname) && isset($psw) && isset($rePsw)) {
                    if (strcmp($_POST['password'],$_POST['repass']) == 0) {
                        echo 'inserisci psw uguali';

                    }

                }
            }
        }
    }
}