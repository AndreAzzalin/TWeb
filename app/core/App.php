<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 22/12/2017
 * Time: 17:30
 */


class App {

    //dichiaro i controller e metodi di default
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    /**
     * App constructor.
     */
    public function __construct() {
        $url = $this->parseUrl();
       // print_r($url);

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
               // echo '<br>'. $this->method. ' metodo<br>';
                unset($url[1]);
            }
        }
        //print_r($url);
    }

    //prende url del prowser e ne crea un array
    public function parseUrl() {
        if (isset($_GET['url'])) {
            //crea array con valori trimmando /
            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));

        }
    }
}