<?php
/**
 * controller che si occupa di gestire la pagina di tutti gli artisti
 */

class Artists extends Controller {

    //view per la pagina con la lista di tutti gli artisti
    public function index() {
        $this->checkLogin();
        $this->view('artists/artistsPage');

    }

    //view per la pagina pubblica dell'artista con $nickname
    function profile($nickname = null) {
        if ($nickname != null) {
            $this->checkLogin();
            $this->view('artists/publicPage',['nickname' => $nickname]);
        }
    }

    function getUploads() {
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getArtistGif($this->getUser()));
    }

    function getFav() {
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getArtistFav($this->getUser()));
    }

    function getArtistsList() {
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getAllArtistsDb());
    }

    //invia alla view tutte le gifs dell'artista richiesto
    function getArtistGifs() {
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getArtistGif($_POST['artist']));
    }
    //invia alla view tutte le gifs dell'artista richiesto per le pagine pubbliche
    function requestPublicArtistGifs() {
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getArtistPublicGif($_POST['artist'],$_POST['user']));
    }
}