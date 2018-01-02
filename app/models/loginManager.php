<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 26/12/2017
 * Time: 21:46
 */
require_once '../app/core/DbManager.php';

class loginManager extends DbManager {

    public function getLogin($user_nickname,$password) {

        //usando prepare() si previene sql injection
        $stmt = $this->db_connection()->prepare("SELECT * FROM user WHERE user_nickname=:email AND user_password=:psw");
        $stmt->execute(array(":email" => $user_nickname,":psw" => $password));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowCount();
        //se esiste almeno 1 utente con nickname verifico se corrisponde la password
        if ($count) {
            return TRUE; // log in
        } else {
            RETURN FALSE; // wrong details
        }
    }

    function sec_session_start() {
        $session_name = 'sec_session_id'; // Imposta un nome di sessione
        $secure = false; // Imposta il parametro a true se vuoi usare il protocollo 'https'.
        $httponly = true; // Questo impedirà ad un javascript di essere in grado di accedere all'id di sessione.
        ini_set('session.use_only_cookies', 1); // Forza la sessione ad utilizzare solo i cookie.
        $cookieParams = session_get_cookie_params(); // Legge i parametri correnti relativi ai cookie.
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
        session_name($session_name); // Imposta il nome di sessione con quello prescelto all'inizio della funzione.
        session_start(); // Avvia la sessione php.
        session_regenerate_id(); // Rigenera la sessione e cancella quella creata in precedenza.
    }
}


