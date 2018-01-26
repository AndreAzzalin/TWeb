<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 05/01/2018
 * Time: 09:56
 */

class Artists extends Controller {


    public function index() {
        $this->checkLogin();
        $this->view('artists/artistsPage');

    }

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


    function getNickname() {
        echo $this->getUser();
    }


    function getArtistGifs() {
        // var_dump($_POST['artist']);
        $mediaManager = $this->model('mediaManager');
        $this->toJson($mediaManager->getArtistGif($_POST['artist']));
    }


}