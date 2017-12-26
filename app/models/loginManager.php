<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 26/12/2017
 * Time: 21:46
 */

class LoginManager {

    public function getlogin() {
        // here goes some hardcoded values to simulate the database
        if (isset($_POST['username']) && isset($_POST['password'])) {

            if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
                return 'login';
            } else {
                return 'invalid user';
            }
        }
    }
}