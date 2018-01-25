<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 05/01/2018
 * Time: 09:56
 */

class Categories extends Controller {

    public $nickname;

    public function index($category = null) {
        $this->checkLogin();
        //$this->view('artists/artistsPage');
        $this->view('categories/categoryPage',['category' => $category]);

    }

    function requestCategory() {
        $mediaManager = $this->model('mediaManager');
        if (isset($_POST['category'])) {
            $category = $_POST['category'];
            $this->toJson($mediaManager->getCategory($category));

        } else echo 'Error on Delete';
    }


}