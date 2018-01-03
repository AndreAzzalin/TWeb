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
        $this->sec_session_start();
      //  setcookie("User",$nickname);
        if (!isset($_SESSION['User'])) {
           //$_SESSION['User'] = $nickname;
            $this->redirect('http://localhost/TWeb/public/');

        }
        //  }


        //verificare cin setName
        // $user = $this->model('User');
        //$user->nickname = $nickname;
        //$user->psw = $psw;
        $this->view('home/index',['nickname' => $nickname]);

        //  $this->sec_session_start($nickname);
    }

}
