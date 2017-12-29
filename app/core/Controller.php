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

    //il controller crea il model necessario
    public function model($model) {
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }

    public function view($view,$data = []){
        //creo view richiesta dal client
        require_once '../app/views/'.$view.'.php';

    }


# Redirects current page to the given URL and optionally sets flash message.
  public function redirect($url,$flash_message = 'gay') {
        if (1) {
        var_dump( $_SESSION["flash"] = $flash_message)  ;
        }
        # session_write_close();
        header("Location: $url");
        die;
    }



}