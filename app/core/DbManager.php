<?php
/**
 * classe che si occupa di interagire e interrogare il Db
 */


require_once 'DbConfig.php';

class DbManager {

    //metodo che si occupa di creare la connesione con il databse
    protected function db_connection() {
        try {
            $db_con = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
            $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db_con;
        } catch (PDOException $e) {
            die("Connection with database failed...retry later");
        }
    }

}
