<?php
/**
 * Controller che gestisce gli artisti e le relative pagine correlate
 */

class Upload extends Controller {


    public function index() {
        $this->checkLogin();
        $this->view('upload/uploadPage');
    }


    public function getNewGif() {
        $mediaManager = $this->model('mediaManager');

        if (isset($_POST['title'])) $title = $_POST['title']; else
            echo 'error';
        if (isset($_POST['cat'])) $category = $_POST['cat']; else
            echo 'error';

        if (!empty($_FILES['file']['type'])) {
            //verifico se esiste già il titolo
            if (!$mediaManager->existTitle($title)) {
                //ritona l'estensione del file
                $ext = explode('/',$_FILES['file']['type']);
                //mi accerto che il file ricevuto sia una gif
                if (end($ext) === "gif") {
                    $time = date("Y-m-d_H-i-s",time());
                    $owner = $this->getUser();
                    $fileName = $time . '_uploadBy_' . $owner;
                    $sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
                    $targetPath = 'app/uploads/' . $fileName . '.gif'; // Target path where file is to be stored


                    //invio al model le informazioni necessarie per inserire la nuova gif nel db
                    if (move_uploaded_file($sourcePath,$targetPath) && $mediaManager->uploadDb($title,$fileName,$owner)) {
                        $gif_id = $mediaManager->getLastId();
                        foreach ($category as $cat) {


                            $mediaManager->uploadCatDb($gif_id['id'],$cat);
                        }
                        echo 1;
                    }
                } else {
                    echo 'Extension not supported, please upload .gif format!';
                }
            } else {
                echo 'Title already exist';
            }
        } else 'niente file';


    }

}