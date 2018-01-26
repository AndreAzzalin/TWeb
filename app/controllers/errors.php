<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 26/01/2018
 * Time: 00:17
 */

class Errors extends Controller {


    public function index($errors = null) {
        switch ($errors) {
            case 404:
                $this->view('error/error404',['error' => $errors]);
                break;
            case 403:
                $this->view('error/error403',['error' => $errors]);
                break;
            case 500:
                $this->view('error/error500',['error' => $errors]);
                break;
        }
    }
}