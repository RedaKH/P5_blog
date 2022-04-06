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
        $loginModel = new ModelsLogin;
        if(isset($_POST['submit'])) {
            $oldpassword = md5($_POST['oldpassword']);
            $newpassword = md5($_POST['newpassword']);

            if ($oldpassword!=$newpassword) {
                $errors['msg']="Password not matched";
                $loginModel->oldPasswordMatches($oldpassword);
                View::render('Home/changepassword.php',$errors);

            }else {
                $id = $_SESSION['id'];
                $loginModel->changePassword($id,$newpassword);
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
