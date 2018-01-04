<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 26/12/2017
 * Time: 21:46
 */
require_once '../app/core/DbManager.php';

class loginManager extends DbManager {

    public function checkCredential($nickname,$password) {
        //usando prepare() si previene sql injection
        $stmt = $this->db_connection()->prepare("SELECT * FROM user WHERE user_nickname=:nickname AND user_password=:psw LIMIT 1");
        $stmt->execute([":nickname" => $nickname,":psw" => $password]);
        $count = $stmt->rowCount();
        //se esiste almeno 1 utente con nickname verifico se corrisponde la password
        if ($count) {
            return true; // log in
        } else {
            return false; // wrong details
        }
    }

    public function register($nickname,$password) {
        //se utente esiste già ritorna UAE altrimenti TRUE o FALSE
        $stmt = $this->db_connection()->prepare("SELECT * FROM USER WHERE user_nickname=:nickname LIMIT 1");
        $stmt->execute([":nickname" => $nickname]);
        $count = $stmt->rowCount();
        if ($count) {
           return "UAE";
        } else {
            $stmt = $this->db_connection()->prepare("INSERT INTO user (user_nickname, user_password) VALUES (:nickname ,:psw)");
            $stmt->execute([":nickname" => $nickname,":psw" => $password]);
            return TRUE;
        }
        return FALSE;
    }


}


