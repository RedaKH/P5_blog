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

        $username = $_POST['username'];
        $password = $_POST['password'];

       
        $userData = $login->can_login($username,$password);

        if($userData) {
            session_start();
                $_SESSION['user'] = $userData;
                header('Location: ../view/dashboard.php');
        } else {
            return "Invalid Username or Password";
        



    }}

    public function log_out(){
        session_start();
        if(session_destroy()){
            header("Location : login.php");
        }
    }
}
