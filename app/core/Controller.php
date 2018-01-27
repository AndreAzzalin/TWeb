<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 22/12/2017
 * Time: 17:33
 *
 * classe che si occupa di assegnare per ogni controller la view e il model richiesto per soddisfare una determinata richiesta
 */

class Controller
{

    //il controller crea il model di cui ha bisogno
    protected function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    //view la view da caricare e $data i parametri che si possono passare dall'url
    protected function view($view, $data = [])
    {
        //creo view richiesta dal client
        require_once '../app/views/' . $view . '.php';

    }


// funzione di redirect verso url
    protected function redirect($url)
    {
        header("Location: $url");
    }

    //funzione per l'inizializzazine della sessione previene hijaking e XSS
    protected function sec_session_start()
    {
        session_start(); // Avvia la sessione php.
        session_regenerate_id(); // Rigenera la sessione e cancella quella creata in precedenza.
    }

    protected function checkLogin()
    {
        $this->sec_session_start();
        if (!isset($_SESSION['User'])) {
            $this->redirect('/TWeb/public/');
        }
        return $_SESSION['User'];
    }

    protected function getUser()
    {
        if (!isset($_SESSION)) {
            $this->sec_session_start();
        }
        if (isset($_SESSION['User'])) {
            return $_SESSION['User'];
        }
    }

    protected function toJson($rows)
    {
        foreach ($rows as $row) {
            echo json_encode($row);
        }
    }


}