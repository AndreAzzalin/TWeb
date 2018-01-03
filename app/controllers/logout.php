<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 29/12/2017
 * Time: 20:39
 */


class Logout extends Controller {

    public function index() {
        /*session_start();
        //imposto la view
        $this->view('login/loginPage');
        //session_start();
        if (isset($_SESSION['nickname'])) {

        if (session_destroy()) {
            $this->redirect('http://localhost/TWeb/public/','loggin out');
        }
    }*/
        $this->logout();
    }

    //funzione che avvia una sessione per accedere alle informazioni per poi distruggerle e redirectare alla pagina di login
    function logout() {
        $this->sec_session_start();
        // Elimina tutti i valori della sessione.
        $_SESSION = array();
        // Recupera i parametri di sessione.
        $params = session_get_cookie_params();
        // Cancella i cookie attuali.
        setcookie(session_name(),'',time() - 42000,$params["path"],$params["domain"],$params["secure"],$params["httponly"]);
        // Cancella la sessione.
        session_destroy();
        $this->redirect('http://localhost/TWeb/public/');
    }
}