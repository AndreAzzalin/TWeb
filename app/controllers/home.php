<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 22/12/2017
 * Time: 18:20
 */

class Home extends Controller {

    //posso passare all'index name e other come parametri
    public function index($nickname = null) {
        $this->checkLogin();
        $this->view('home/homePage',['nickname' => $nickname]);
    }

    public function memesToJson() {
        $mediaManager = $this->model('mediaManager');
        $memes = $mediaManager->getAllGifs($this->getUser());
        foreach ($memes as $meme) {
             echo json_encode($meme);
        }
    }

    function favGif() {
        $mediaManager = $this->model('mediaManager');
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            if ($mediaManager->favGifToDb($this->getUser(),$id)) {
                echo 'u love it, see all in your account page';
            }
        } else echo 'Error on favorite';


    }

}
