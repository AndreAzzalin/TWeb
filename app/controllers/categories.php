<?php
/**
controller che si occupa di gestire le richieste della sezione categorie
 */

class Categories extends Controller {

    public $nickname;

    public function index($category = null) {
        $this->checkLogin();
        //in base alla richiesta dell'url mostro la categoria richiesta
        $this->view('categories/categoryPage',['category' => $category]);

    }

    //richiede la categoria e risponde con JSON con categorue
    function requestCategory() {
        $mediaManager = $this->model('mediaManager');
        if (isset($_POST['category'])&&isset($_POST['nickname'])) {
            $category = $_POST['category'];
            $nickname = $_POST['nickname'];
            $this->toJson($mediaManager->getCategory($category,$nickname));

        } else echo 'Error on Delete';
    }


}