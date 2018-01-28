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

    // ritorna tutte le gifs
    function getAllGifs($user) {
        $stmt = $this->db_connection()->prepare("SELECT  DISTINCT id,title,src,user,owner FROM `favorite` right JOIN gifs on gif_id=id and user=:user_id ");
        $stmt->bindParam(':user_id',$user);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        shuffle($rows);
        $gif['gif'] = $rows;
        return $gif;
    }

    //ritorna gifs della categoria $category
    function getCategory($category,$nickname) {
        $stmt = $this->db_connection()->prepare("SELECT DISTINCT * FROM categories JOIN gifs ON categories.gif_id = gifs.id  LEFT JOIN favorite ON favorite.gif_id=id AND user=:nickname WHERE category = :category");
        $stmt->bindParam(':category',$category);
        $stmt->bindParam(':nickname',$nickname);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        shuffle($rows);
        $categories['cat'] = $rows;
        return $categories;
    }

    //verifica se $title esiste già come titolo di una gif
    function existTitle($title) {
        $stmt = $this->db_connection()->prepare("SELECT title FROM gifs WHERE title=:title LIMIT 1");
        $stmt->bindParam(':title',$title);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {
            return true;
        } else {
            return false;
        }
    }

    //ritorna l'utlimo ID inserito per le gif
    function getLastId() {
        $stmt = $this->db_connection()->prepare("SELECT id FROM gifs ORDER BY id DESC LIMIT 1");
        $stmt->execute();
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }

    //inserisce la gif $gif_id nella categoria $cat
    function uploadCatDb($gif_id,$cat) {
        $stmt = $this->db_connection()->prepare("INSERT INTO categories (gif_id, category)  VALUES (:gif_id,:category)");
        $stmt->bindParam(':gif_id',$gif_id);
        $stmt->bindParam(':category',$cat);
        return $stmt->execute();
    }

    //inserisce una nuova gif nel db
    function uploadDb($title,$src,$owner) {

        $stmt = $this->db_connection()->prepare("INSERT INTO gifs (title, src,owner)  VALUES (:title,:src,:owner)");
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':src',$src);
        $stmt->bindParam(':owner',$owner);
        return $stmt->execute();
    }

    //aggiungeall'utente $user_id la gif favorita $gif_id
    function favGifDb($user_id,$gif_id) {
        $stmt = $this->db_connection()->prepare("INSERT INTO favorite  VALUES (:user_id,:gif_id)");
        $stmt->bindParam(':user_id',$user_id);
        $stmt->bindParam(':gif_id',$gif_id);
        return $stmt->execute();
    }


    //cancella la gif favorita  $gif_id
    function delFavDb($gif_id,$user_id) {
        $stmt = $this->db_connection()->prepare("DELETE FROM favorite WHERE gif_id=:gif_id AND user=:user_id");
        $stmt->bindParam(':gif_id',$gif_id);
        $stmt->bindParam(':user_id',$user_id);
        return $stmt->execute();
    }

    //ritorna tutte le fig dell'artista $user_id
    function getArtistGif($user_id) {
        $stmt = $this->db_connection()->prepare("SELECT DISTINCT * FROM gifs WHERE owner=:owner");
        $stmt->bindParam(':owner',$user_id);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        shuffle($rows);
        $gif['own'] = $rows;
        return $gif;
    }

    //ritorna tutte le fig dell'artista $user_id
    function getArtistPublicGif($user_id,$nickname) {
        $stmt = $this->db_connection()->prepare("SELECT DISTINCT * FROM gifs LEFT JOIN favorite ON gif_id = id and user=:nickname where owner=:owner");
        $stmt->bindParam(':owner',$user_id);
        $stmt->bindParam(':nickname',$nickname);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        shuffle($rows);
        $gif['public'] = $rows;
        return $gif;
    }

    //ritorna tuttie le gif favorite dell utente $user_id
    function getArtistFav($user_id) {
        $stmt = $this->db_connection()->prepare(" SELECT DISTINCT id,title,src,user,owner FROM `favorite`JOIN gifs ON gif_id=id AND user=:user_id");
        $stmt->bindParam(':user_id',$user_id);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        shuffle($rows);
        $gif['fav'] = $rows;
        return $gif;
    }

    //elimina la gif $gif_id
    function delUploadsDb($gif_id) {
        $stmt = $this->db_connection()->prepare(" DELETE FROM gifs WHERE id=:gif_id");
        $stmt->bindParam(':gif_id',$gif_id);
        return $stmt->execute();
    }

    //ritorna tuttii gli utenti/artisti
    function getAllArtistsDb() {
        $stmt = $this->db_connection()->prepare("SELECT nickname FROM users");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        shuffle($rows);
        $artists['art'] = $rows;
        return $artists;
    }
}
