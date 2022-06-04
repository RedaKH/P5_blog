<?php

namespace App\Controllers;

use App\Models\Login as ModelsLogin;
use \Core\View;


class Login extends \Core\Controller
{
  


    public function loginPost()
    {
        session_start();

        if ($_POST['submit']) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $loginModel = new ModelsLogin;
            if ($loginModel->canLogin($username, $password)) {

                $_SESSION['username'] = $username;

                view::render('Home/dashboard.php');
            } else {
                
                
                view::render('Home/login.php');
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
