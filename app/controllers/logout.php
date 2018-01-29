<?php
/**
controller che si occupa di gestire il logout cancellando tutte le variabili di sessione
 */


class Logout extends Controller {

    public function index() {
        $this->logout();
    }

    //funzione che avvia una sessione per accedere alle informazioni per poi distruggerle e redirectare alla pagina di login
    function logout() {
        $this->sec_session_start();
        // unsetta tutti i valori della sessione.
        session_unset();
        // Cancella la sessione.
        session_destroy();
        $this->redirect('http://localhost/TWeb/');
    }
}