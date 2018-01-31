<?php
/**
 * classe controller che si occupa della profilazione degli utenti
 */

class Fingerprint extends Controller {


    public function index() {
        $this->checkLogin();
        if ($this->getUser() === 'admin') {
            $this->view('fingerprint/fingerprintPage');
        } else {
            $this->redirect('/TWeb/home');
        }
    }

    //recupera ogni utente tranne l'admin
    function getUsersFp() {
        $loginManager = $this->model('loginManager');
        $this->toJson($loginManager->getUsersLogs());
    }

    //recupera informazioni utenti
    function getUsersFingerprint() {
        $loginManager = $this->model('loginManager');
        $this->toJson($loginManager->getUsersFpDb());
    }

    //ritorna i dati dell'utente selezionato
    function getSelectedUser() {
        $loginManager = $this->model('loginManager');
        if (isset($_POST['user'])) {
            $user = $_POST['user'];
            $this->toJson($loginManager->getSelectedUsersFpDb($user));
        }
    }

}

