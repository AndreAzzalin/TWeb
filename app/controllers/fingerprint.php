<?php
/**
 * Created by PhpStorm.
 * User: paranoia
 * Date: 26/01/2018
 * Time: 14:32
 */

class Fingerprint extends Controller {


    public function index() {
        $this->checkLogin();
        if($this->getUser()==='admin'){
            $this->view('fingerprint/fingerprintPage');
        }else{
            $this->redirect('/TWeb/public/home');
        }


    }

    function getUsersFp(){
        $loginManager = $this->model('loginManager');
        $this->toJson($loginManager->getUsersLogs());
    }


}

