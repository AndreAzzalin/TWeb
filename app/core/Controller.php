<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 22/12/2017
 * Time: 17:33
 *
 * avrò nella cartella controllers un controller per pagina e verra eseguito il controller in base alla richesta del client
 */

 class Controller {

    public function __construct() {

    }

    protected function model($model) {
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }

}