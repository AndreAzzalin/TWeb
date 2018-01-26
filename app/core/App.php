<?php
/**
 * classe chhe si occupa di  gestire le richieste della url e instradarle al giusto controller che soddisferà la richiesta
*/

class App {

    //dichiaro i controller e metodi di default
    protected $controller = 'login';
    protected $method = 'index';
    protected $params = [];


    public function __construct() {
        $url = $this->parseUrl();

        //verifico se esiste un controller per la pagina cercata se non esiste rimane il controller home
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            //setto il parametro controller con url[0]
            $this->controller = $url[0];
            unset($url[0]);
        }


        require_once '../app/controllers/' . $this->controller . '.php';
        //creo un oggetto controller (con il parametro $contrller)
        $this->controller = new $this->controller;


        //verifico se il secondo parametro nell'url esiste nel controller essendo la richiesta di un metodo
        if (isset($url[1])) {
            if (method_exists($this->controller,$url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }


        //aggiungo i parametri nella variabile se nonci sono lascio array vuoto
        $this->params = $url ? array_values($url) : [];

        //esegue callback(metdo che richiama altri metodi) eseguo il metodo $method del controller $controller con i parametri $params
        call_user_func_array([$this->controller,$this->method],$this->params);

    }


    //prende url del prowser e ne crea un array
    public function parseUrl() {
        if (isset($_GET['url'])) {
            //crea array con valori trimmando /
            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }
        return null;
    }
}