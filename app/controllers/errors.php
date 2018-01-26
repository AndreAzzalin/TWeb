<?php
/**
controller che si occupa di gestire le richieste della sezione errori
 */
class Errors extends Controller {

    //in base all'errore il file di configurazione httaccess mostrerà la pagina custom
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