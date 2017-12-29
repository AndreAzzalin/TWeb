<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 29/12/2017
 * Time: 20:39
 */


class Logout extends Controller {

    public function index() {
        //imposto la view
        $this->view('login/loginPage');
        session_start();
        unset($_SESSION['user_session']);

        if (session_destroy()) {
            $this->redirect('http://localhost/TWeb/public/','loggin out');
        }
    }
}