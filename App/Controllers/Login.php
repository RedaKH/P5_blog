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

    /* public function loginPost()
    { 
        session_start();
        $user = $_POST['username'];  
        $pass = $_POST['password'];  
        if ($user=='red' && $pass=='123')   
        {  
            //declaring session  
            $_SESSION['user']=$user;
            view::render('Home/dashboard.php');
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            view::render('Home/login.php',$data);
        }  
    }*/
//méthode pour se connecter
    public function loginPost()
    {
        //on appelle la session
        session_start();
        /*
        si le submit existe alors il va chercher le username et le mdp dans les post
        et on va appeler le model du login donc on fera une autre condition pour chercher
        les données dans la bdd et on appellera la variable session si il trouve le bon login et mdp
        il va le rediriger dans le dashboard sinon il y aura un msg d'erreur en disant que le compte est invalide


        */

        if ($_POST['submit']) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $loginModel = new ModelsLogin;
            if ($loginModel->canLogin($username, $password)) {
                
                $_SESSION['username'] = $username;
                view::render('Home/dashboard.php');
            } else {
                $data['error'] = 'Your Account is Invalid';
                view::render('Home/login.php', $data);
            }
        }


    }




    public function logout()
    {
        session_destroy();
        return View::render('Home/login.php');
    }
}
