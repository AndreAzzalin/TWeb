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
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view,$data = []) {
        //creo view richiesta dal client
        require_once '../app/views/' . $view . '.php';

    }


# Redirects current page to the given URL and optionally sets flash message.
    public function redirect($url) {
        header("Location: $url");
    }

    //funzione avanzata per l'inizializzazine della sessione previene hijaking e XSS
    function sec_session_start() {
        //session_name = 'User'; // Imposta un nome di sessione
        //$secure = false; // Imposta il parametro a true se vuoi usare il protocollo 'https'.
       // $httponly = true; // Questo impedirà ad un javascript di essere in grado di accedere all'id di sessione.
        //ini_set('session.use_only_cookies',1); // Forza la sessione ad utilizzare solo i cookie.
       // $cookieParams = session_get_cookie_params(); // Legge i parametri correnti relativi ai cookie.
        //session_set_cookie_params($cookieParams["lifetime"],$cookieParams["path"],$cookieParams["domain"],$secure,$httponly);
        //session_name($session_name); // Imposta il nome di sessione con quello prescelto all'inizio della funzione.
        session_start(); // Avvia la sessione php.
        session_regenerate_id(); // Rigenera la sessione e cancella quella creata in precedenza.
    }




}