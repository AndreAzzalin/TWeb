<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 05/01/2018
 * Time: 09:56
 */

class Artists extends Controller {

    public $nickname;

    public function index($nickname = null) {
        $this->checkLogin();
        //$this->view('artists/artistsPage');
        $this->view('artists/artistsPage');

    }

    function profile($nickname = null) {
        if ($nickname != null) {
            $this->checkLogin();
            $this->view('artists/publicPage',['nickname' => $nickname]);
        }
        //echo 'nickname = '.$nickname;
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