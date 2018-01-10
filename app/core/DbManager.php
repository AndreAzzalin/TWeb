<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 02/01/2018
 * Time: 14:06
 * classe che si occupa di interagire e interrogare il Db
 */


require 'DbConfig.php';

class DbManager {

    protected function db_connection() {
      try {
            $db_con = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,DB_USER,DB_PASSWORD);
            $db_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db_con;
       } catch (PDOException $e) {
            $e->getMessage() . 'errore connesione db';
        }
        return null;
   }

    protected function getQuote($input){
        return $this->db_connection()->quote($input);
    }

}
