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


        /* session_start();
         if (isset($_SESSION)) {
             session_regenerate_id(true);*/
        $this->checkLogin();
        //  }


        //verificare cin setName
        // $user = $this->model('User');
        //$user->nickname = $nickname;
        //$user->psw = $psw;
        $this->view('home/homePage',['nickname' => $nickname]);
        $this->memesToJson();

        //  $this->sec_session_start($nickname);
    }

    public function memesToJson(){
        $mediaManager = $this->model('mediaManager');
        $memes =  $mediaManager->getAllMemes();
        //var_dump($memes);
        foreach ($memes as $meme) {
            echo json_encode($meme);
        }
    }

}
