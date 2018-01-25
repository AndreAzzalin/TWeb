<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 05/01/2018
 * Time: 09:56
 */

class Dashboard extends Controller {

    public function index() {
        $this->checkLogin();
        $this->view('artists/PrivatePage');
    }


    function getUploads() {
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getArtistGif($this->getUser()));
    }

    function getFav() {
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getArtistFav($this->getUser()));
    }

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
            if ($mediaManager->delFavDb($id)) {
                echo 'Delete successful';
            }
        } else echo 'Error on Delete';
    }


}