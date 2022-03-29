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
        $login = new ModelsLogin;

    }



    public function LoginPost()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];



  
        $userData = $this->can_login($username,$password);


       

        if($userData) {
            
            session_start();
                $_SESSION['user'] = $userData;
                header('Location:Home/dashboard.php');
        } else {
            return "Invalid Username or Password";
        



    }
    View::render('Home/login.php');
}

    public function log_out(){
        session_start();
        if(session_destroy()){
            header("Location : login.php");
        }
    }
}
