<?php
/**
 *controller che si occupa di gestire le richieste della sezione home
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
                echo 'you love it, see all favorite on your dashboard';
            }
        } else echo 'Error on favorite';
    }

    function getFingerprint() {
        if (isset($_POST['user'])) {
            $user = $_POST['user'];

            if (strcmp("admin",$user)) {
                $ip = $_REQUEST['REMOTE_ADDR']; // the IP address to query

                $query = file_get_contents('http://ip-api.com/xml/' . $ip);
                $ob = simplexml_load_string($query);

                $user_ip = $ob->query;
                $country = $ob->country;
                $city = $ob->city;
                $isp = $ob->isp;
                $time = date("Y-m-d_H-i-s",time());
                $mediaManager = $this->model('loginManager');
                if ($mediaManager->fingerprintDB($user,$user_ip,$country,$city,$isp,$time)) {
                    echo 'ok';
                } else  'no';
            }
        }
    }

}
