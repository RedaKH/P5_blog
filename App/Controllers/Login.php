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
        /*
        si l'utilisateur  submit existe alors il va chercher le username et le mdp dans les post
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

    public function updatePassword()
    { 
        if(isset($_POST['submit'])) {
            $currentpassword = md5($_POST['currentpassword']);
            $newpassword = md5($_POST['newpassword']);

            if ($currentpassword!=$newpassword) {
                $errors['msg']="Password not matched";
                View::render('Home/change_password.php',$errors);

            }else {
                $loginModel = new ModelsLogin;
                $id = $_SESSION['id'];
                $loginModel->changePassword($id,$newpassword);
                View::render('Home/change_password.php');

            }


            # code...
        }
        
    
            
        

    } 

  






    public function logout()
    {

        session_destroy();
        return View::render('Home/login.php');
    }
}
