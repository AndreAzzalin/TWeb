<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 29/12/2017
 * Time: 20:39
 */


class Logout extends Controller {

    public function index() {
        $this->logout();
    }

    //funzione che avvia una sessione per accedere alle informazioni per poi distruggerle e redirectare alla pagina di login
    function logout() {
        $this->sec_session_start();
        // Elimina tutti i valori della sessione.
        $_SESSION = array();
        // Recupera i parametri di sessione.
        $params = session_get_cookie_params();

        // Cancella la sessione.
        session_destroy();
        $this->redirect('http://localhost/TWeb/public/');
    }
}