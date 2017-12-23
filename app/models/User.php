<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 22/12/2017
 * Time: 20:29
 */

class User{
    private $nickname;
    private $mail;

    public function __construct($nickname,$mail) {
        $this->nickname = $nickname;
        $this->mail = $mail;

    }

    /**
     * @return mixed
     */
    public function getMail() {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getNickname() {
        return $this->nickname;
    }
}