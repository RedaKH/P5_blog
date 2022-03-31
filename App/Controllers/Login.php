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


    // méthode qui permet de se connecter

    public function LoginPost()
    {
        $loginmodel = new ModelsLogin;

        if (isset($_POST['submit'])) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $loginmodel->canLogin($username, $password);
        }
        View::render('Home/login.php');
       
    }




    public function logout()
    {
        session_destroy();
        return header('Location :login.php');
    }
}
