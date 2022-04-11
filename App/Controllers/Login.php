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


    //méthode pour se connecter
    public function loginPost()
    {
        //on appelle la session
        session_start();
        if ($_POST['submit']) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $loginModel = new ModelsLogin;
            if ($loginModel->canLogin($username, $password)) {

                $_SESSION['username'] = $username;
                view::render('Home/dashboard.php');
            } else {
                $data['error'] = "Your Account is Invalid";
                view::render('Home/login.php',$data);
            }
        }
    }

 

        
        
    
            
        

     

  






    public function logout()
    {
        session_start();

        session_destroy();
        return View::render('Home/login.php');
    }
}
