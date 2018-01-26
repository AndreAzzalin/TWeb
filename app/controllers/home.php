<?php
/**
/**
controller che si occupa di gestire le richieste della sezione home
 */

class Home extends Controller {

    //posso passare all'index name e other come parametri
    public function index($nickname = null) {
        $this->checkLogin();
        $this->view('home/homePage',['nickname' => $nickname]);
    }

    //invia alla view il JSON con tutte le gifs
    public function gifsToJson() {
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getAllGifs($this->getUser()));
    }

    //ruiceve dalla view l'id e l'user a cui assegnare il like
    function favGif() {
        $mediaManager = $this->model('mediaManager');
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            if ($mediaManager->favGifDb($this->getUser(),$id)) {
                echo 'u love it, see all in your account page';
            }
        } else echo 'Error on favorite';


    }

}
