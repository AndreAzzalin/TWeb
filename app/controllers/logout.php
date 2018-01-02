<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 29/12/2017
 * Time: 20:39
 */


class Logout extends Controller {

    public function index() {
        session_start();
        //imposto la view
        $this->view('login/loginPage');
        //session_start();
        if (isset($_SESSION['nickname'])) {

        if (session_destroy()) {
            $this->redirect('http://localhost/TWeb/public/','loggin out');
        }
    }
    }
}