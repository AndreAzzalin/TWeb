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
        $stmt = $this->db_connection()->prepare("SELECT nickname,psw FROM users WHERE nickname=:nickname LIMIT 1");
        $stmt->execute([":nickname" => $nickname]);
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        //se esiste almeno 1 utente con nickname verifico se corrisponde la password
        if ($count) {
            return password_verify($password,$row['psw']); // log in
        } else {
            return false; // wrong details
        }
    }

    public function register($nickname,$password) {
        //se utente esiste già ritorna UAE altrimenti TRUE o FALSE
        $stmt = $this->db_connection()->prepare("SELECT * FROM users WHERE nickname=:nickname LIMIT 1");
        $stmt->execute([":nickname" => $nickname]);
        $count = $stmt->rowCount();
        if ($count) {
            return "UAE";
        } else {
            //PASSWORD_DEFAULT che utilizza l'algoritmo bcrypt
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $stmt = $this->db_connection()->prepare("INSERT INTO users (nickname, psw) VALUES (:nickname ,:psw)");
            $stmt->execute([":nickname" => $nickname,":psw" => $hash]);
            return true;
        }
        return false;
    }

}


