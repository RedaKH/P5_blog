<?php

namespace App\Controllers;

use App\Models\Login as ModelsLogin;
use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Login extends \Core\Controller
{
    public function __construct()
    {
    }



    public function login_post()
    {
        $login = new ModelsLogin;
        var_dump($_POST['submit']);

        
        if (isset($_POST['submit'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $row = $login->can_login($username);

            if (is_array($row)) {
                $_SESSION['username'] = $row['username'];
            } else {
                echo "Mot de passe ou login invalide";
            }
            if (isset($_SESSION['username'])) {
                header("Location : dashboard.php");
            }
        }



        view::render('Home/login.php');
    }

    public function log_out(){
        session_start();
        if(session_destroy()){
            header("Location : login.php");
        }
    }
}
