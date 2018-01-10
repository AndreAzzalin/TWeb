<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 09/01/2018
 * Time: 11:01
 * questa classe si occupa di ritornare le rows necessare al controller per passarle alla view
 */
require_once '../app/core/DbManager.php';

class MediaManager extends DbManager {

    function getAllMemes() {
        $stmt = $this->db_connection()->prepare("SELECT title FROM memes");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
       // var_dump($rows);
        $memes['memes'] = $rows;
        return $memes;

    }

    function getCategory($category){
        $stmt = $this->db_connection()->prepare("SELECT title FROM memes");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $memes['memes'] = $rows;
        return $memes;
    }

}
