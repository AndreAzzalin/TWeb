<?php


class Faq extends Controller {

    public function index() {
        $this->checkLogin();
        $this->view('faq/faqPage');

    }
}