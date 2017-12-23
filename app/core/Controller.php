<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 22/12/2017
 * Time: 17:33
 */

 class Controller {

    public function __construct() {

    }

    protected function model($model) {
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }
}