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



    public function LoginPost()
    {
        $login = new ModelsLogin;
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($login->canLogin($username, $password)) {
            $_SESSION['username'] = $username;
            return header('Location :Home/dashboard.php');
        } else {
            echo "erreur de login ou mot de passe";
        }

        View::render('Home/login.php');
    }

    public function logout(){
           session_destroy();
           return header('Location : login.php');
        }
    
}
