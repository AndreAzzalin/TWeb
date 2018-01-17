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
        $stmt = $this->db_connection()->prepare("SELECT title,src FROM gifs");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($rows);
        $gifs['src'] = $rows;

        return $gifs;

    }

    function getCategory($category) {
        $stmt = $this->db_connection()->prepare("SELECT title FROM gifs");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $memes['memes'] = $rows;
        return $memes;
    }

    function existTitle($title) {
        $stmt = $this->db_connection()->prepare("SELECT title FROM gifs WHERE title=:title LIMIT 1");
        $stmt->execute([":title" => $title]);
        // $row = $stmt->fetch();
        $count = $stmt->rowCount();
        if ($count) {
            return true;
        } else {
            return false;
        }
    }

    function uploadToDb($title,$src,$owner) {

        $stmt = $this->db_connection()->prepare("INSERT INTO gifs (title, src,owner)  VALUES (:title,:src,:owner)");
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':src',$src);
        $stmt->bindParam(':owner',$owner);
        return $stmt->execute();


    }


}
