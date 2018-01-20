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

        $this->view('artists/artistPage');
    }


}