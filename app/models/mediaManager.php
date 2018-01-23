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

    function getAllGifs($user) {
        $stmt = $this->db_connection()->prepare("SELECT  DISTINCT id,title,src,user,owner FROM `favorite` right JOIN gifs on gif_id=id and user=:user_id ");
        $stmt->bindParam(':user_id',$user);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        shuffle($rows);
        $gif['gif'] = $rows;
        return $gif;
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


    function getLastId() {
        $stmt = $this->db_connection()->prepare("SELECT id FROM gifs ORDER BY id DESC LIMIT 1");
        $stmt->execute();
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }

    function uploadCatDb($gif_id,$cat) {

        $stmt = $this->db_connection()->prepare("INSERT INTO categories (gif_id, category)  VALUES (:gif_id,:category)");
        $stmt->bindParam(':gif_id',$gif_id);
        $stmt->bindParam(':category',$cat);
        return $stmt->execute();
    }


    function uploadDb($title,$src,$owner) {

        $stmt = $this->db_connection()->prepare("INSERT INTO gifs (title, src,owner)  VALUES (:title,:src,:owner)");
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':src',$src);
        $stmt->bindParam(':owner',$owner);
        return $stmt->execute();
    }

    function favGifDb($user_id,$gif_id) {
        $stmt = $this->db_connection()->prepare("INSERT INTO favorite  VALUES (:user_id,:gif_id)");
        $stmt->bindParam(':user_id',$user_id);
        $stmt->bindParam(':gif_id',$gif_id);
        return $stmt->execute();
    }

    //DELETE FROM `favorite` WHERE gif_id='32'

    function delFavDb($gif_id) {
        $stmt = $this->db_connection()->prepare("DELETE FROM favorite WHERE gif_id=:gif_id");
        $stmt->bindParam(':gif_id',$gif_id);
        return $stmt->execute();
    }

    function getArtistGif($user_id) {
        $stmt = $this->db_connection()->prepare("SELECT * FROM gifs WHERE owner=:owner");
        $stmt->bindParam(':owner',$user_id);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        shuffle($rows);
        $gif['own'] = $rows;
        return $gif;
    }

    function getArtistFav($user_id) {
        $stmt = $this->db_connection()->prepare(" SELECT DISTINCT id,title,src,user,owner FROM `favorite`JOIN gifs on gif_id=id and user=:user_id");
        $stmt->bindParam(':user_id',$user_id);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        shuffle($rows);
        $gif['fav'] = $rows;
        return $gif;
    }

    function delUploadsToDb($gif_id) {
        $stmt = $this->db_connection()->prepare(" DELETE FROM gifs WHERE id=:gif_id");
        $stmt->bindParam(':gif_id',$gif_id);
        return $stmt->execute();
    }

    function getAllArtistsDb() {
        $stmt = $this->db_connection()->prepare("SELECT nickname FROM users");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        shuffle($rows);
        $artists['art'] = $rows;
        return $artists;
    }

    //SELECT COUNT(id) as prefered FROM gifs WHERE owner ='a'
    function getLikedGifs($artist) {

    }


}
