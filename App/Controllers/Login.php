<?php

namespace App\Controllers;

use App\Models\Login as ModelsLogin;
use \Core\View;


class Login extends \Core\Controller
{
  


    public function loginPostAdmin()
    {
        session_start();

        if ($_POST['submit']) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $loginModel = new ModelsLogin;
            if ($loginModel->canLoginAdmin($username, $password)) {

                $_SESSION['username'] = $username;

                view::render('Home/dashboard-admin.php');
            } else {
                
                
                view::render('Home/loginadmin.php');
            }
        }
    }

    public function makeAccount(){
        $loginModel = new ModelsLogin;

        if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $email = $_POST['email'];


            $loginModel->makeAccount($username,$password,$email);

            if (empty($username) || empty($email) || empty($password)) {
                echo "Impossible de créer votre compte";
            }
            View::render('Home/User.php');




        }else {
            View::render('Home/User.php');

        }


    }

    public function loginPostUser()
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
                
                
                view::render('Home/loginuser.php');
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
