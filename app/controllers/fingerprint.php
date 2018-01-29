<?php
/**
 * Created by PhpStorm.
 * User: paranoia
 * Date: 26/01/2018
 * Time: 14:32
 */

class Fingerprint extends Controller {


    public function index($user = null) {
        $this->checkLogin();
        if ($this->getUser() === 'admin') {
            $this->view('fingerprint/fingerprintPage');
        } else {
            $this->redirect('/TWeb/home');
        }


    }

    function getUsersFp() {
        $loginManager = $this->model('loginManager');
        $this->toJson($loginManager->getUsersLogs());
    }

    function getUsersFingerprint() {
        $loginManager = $this->model('loginManager');
        $this->toJson($loginManager->getUsersFpDb());
    }

    function getSelectedUser() {
        $loginManager = $this->model('loginManager');
        if (isset($_POST['user'])) {
            $user = $_POST['user'];
            $this->toJson($loginManager->getSelectedUsersFpDb($user));
        }
    }

}

