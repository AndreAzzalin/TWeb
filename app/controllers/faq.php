<?php

/**
controller che si occupa di gestire le richieste della sezione faq
 */
class Faq extends Controller {

    public function index() {
        $this->checkLogin();
        $this->view('faq/faqPage');

    }
}