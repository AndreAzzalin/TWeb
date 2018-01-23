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
    protected function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    protected function view($view,$data = []) {
        //creo view richiesta dal client
        require_once '../app/views/' . $view . '.php';

    }


# Redirects current page to the given URL and optionally sets flash message.
    protected function redirect($url) {
        header("Location: $url");
    }

    //funzione avanzata per l'inizializzazine della sessione previene hijaking e XSS
    protected function sec_session_start() {
        session_start(); // Avvia la sessione php.
        session_regenerate_id(); // Rigenera la sessione e cancella quella creata in precedenza.
    }

    protected function checkLogin() {
        $this->sec_session_start();
        if (!isset($_SESSION['User'])) {
            //$_SESSION['User'] = $nickname;
            $this->redirect('http://localhost/TWeb/public/');
        }
        return $_SESSION['User'];
    }

    protected function getUser() {
        if(!isset($_SESSION)){
            $this->sec_session_start();
        }

        if (isset($_SESSION['User'])) {
            return $_SESSION['User'];
        }
    }

    protected function toJson($rows){
        foreach ($rows as $row) {
            echo json_encode($row);
        }
    }


}