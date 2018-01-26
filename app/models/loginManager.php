<?php
/**
 *
 * classe che si occupa di gestire le richieste ricevute dal controller del login e interrogare il db di conseguenza
 */
require_once '../app/core/DbManager.php';

class LoginManager extends DbManager
{

    public function checkCredential($nickname, $password)
    {
        //usando prepare() si previene sql injection
        $stmt = $this->db_connection()->prepare("SELECT nickname,psw FROM users WHERE nickname=:nickname LIMIT 1");
        $stmt->execute([":nickname" => $nickname]);
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        //se esiste almeno 1 utente con nickname verifico se corrisponde la password
        if ($count) {
            return password_verify($password, $row['psw']); // log in
        } else {
            return false; // wrong details
        }
    }

    public function register($nickname, $password)
    {
        //se utente esiste già ritorna UAE altrimenti TRUE o FALSE
        $stmt = $this->db_connection()->prepare("SELECT * FROM users WHERE nickname=:nickname LIMIT 1");
        $stmt->execute([":nickname" => $nickname]);
        $count = $stmt->rowCount();
        if ($count) {
            return "UAE";
        } else {
            //PASSWORD_DEFAULT che utilizza l'algoritmo bcrypt
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->db_connection()->prepare("INSERT INTO users (nickname, psw) VALUES (:nickname ,:psw)");
            $stmt->execute([":nickname" => $nickname, ":psw" => $hash]);
            return true;
        }
        return false;
    }

    function fingerprintDB($nickname, $ip, $country, $city, $isp, $time)
    {
        $stmt = $this->db_connection()->prepare("INSERT INTO fingerprint (user_id, ip,country,city,isp,time_login) VALUES (:user_id,:ip,:country,:city,:isp,:time_login)");
        $stmt->execute([':user_id' => $nickname, ':ip' => $ip, ':country' => $country, ':city' => $city, ':isp' => $isp, ':time_login' => $time]);
        return true;
    }

    function getUserList($nickname, $ip, $country, $city, $isp, $time)
    {
        $stmt = $this->db_connection()->prepare("INSERT INTO fingerprint (user_id, ip,country,city,isp,time_login) VALUES (:user_id,:ip,:country,:city,:isp,:time_login)");
        $stmt->execute([':user_id' => $nickname, ':ip' => $ip, ':country' => $country, ':city' => $city, ':isp' => $isp, ':time_login' => $time]);
        return true;
    }

    function getUsersLogs(){
        $stmt = $this->db_connection()->prepare("SELECT * FROM fingerprint");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $users['log_users'] = $rows;
        return $users;
    }


}


