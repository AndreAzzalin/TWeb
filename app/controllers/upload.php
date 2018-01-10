<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 10/01/2018
 * Time: 10:52
 */

class Upload extends Controller{


    public function index() {


        $this->checkLogin();

        $this->view('upload/uploadPage');

    }
}