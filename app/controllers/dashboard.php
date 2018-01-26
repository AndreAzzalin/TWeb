<?php
/**
controller che si occupa di gestire la dashboard dell'utente loggato
 */

class Dashboard extends Controller {

    public function index() {
        $this->checkLogin();
        $this->view('artists/PrivatePage');
    }

    //invia alla view le gif uploadate
    function getUploads() {
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getArtistGif($this->getUser()));
    }

    //invia alla view le gif favorite
    function getFav() {
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getArtistFav($this->getUser()));
    }

    //riceve da view id e cancella la gif con $id
    function deleteUploadsGif() {
        $mediaManager = $this->model('mediaManager');
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            if ($mediaManager->delUploadsDb($id)) {
                echo 'Delete successful';
            }
        } else echo 'Error on Delete';
    }

    //elimina GIF dai preferiti
    function deleteFavGif() {
        $mediaManager = $this->model('mediaManager');
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            if ($mediaManager->delFavDb($id,$this->getUser())) {
                echo 'Delete successful';
            }
        } else echo 'Error on Delete';
    }


}