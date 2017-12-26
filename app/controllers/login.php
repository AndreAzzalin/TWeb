<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 26/12/2017
 * Time: 21:39
 */

class Login extends Controller {

    public function index() {
        $loginManager = $this->model('loginManager');
        $this->view('login/loginPage');

        if ($loginManager->getLogin() == 'login') {
            $this->redirect('http://localhost/TWeb/public/home/','logged in');
            exit;
        }
        else {
            echo $loginManager->getLogin();
        }
    }

    # Redirects current page to the given URL and optionally sets flash message.
    function redirect($url,$flash_message = NULL) {
        if ($flash_message) {
            $_SESSION["flash"] = $flash_message;
        }
        # session_write_close();
        header("Location: $url");
        die;
    }

}