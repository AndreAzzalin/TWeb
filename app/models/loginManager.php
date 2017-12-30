<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 26/12/2017
 * Time: 21:46
 */

require_once 'DbConfig.php';

class loginManager {




    public function getLogin($user_nickname,$password) {
        $db_host = "localhost";
        $db_name = "twebdb";
        $db_user = "root";
        $db_pass = "";

        try {
            $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
            $db_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        try {
            $stmt = $db_con->prepare("SELECT * FROM user WHERE user_nickname=:email AND user_password=:psw");
            $stmt->execute(array(":email" => $user_nickname,":psw"=>$password));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
            if ($count) {
                $_SESSION['user_session'] = $row['user_id'];
                //var_dump($_SESSION['user_session']);
                return TRUE; // log in
            } else {

                RETURN FALSE; // wrong details
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return FALSE;
    }
}
