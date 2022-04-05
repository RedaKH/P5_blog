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
        if ($_SERVER['REQUEST_METHOD']=='POST') {
               $oldPassword = md5($_POST['oldpassword']);

                $loginModel = new ModelsLogin;

                $id = $_SESSION['id'];

                $check = $loginModel->oldPasswordMatches($id,$oldPassword);
                //si l'ancien mdp correspond bien à celui de la bdd alors on fera une condition pour que ca soit true
                //sinon y aura un msg d'erreur comme quoi le mdp ne correspond pas à celui de la bdd

                if ($check==true) {
                    $newPassword = md5($_POST['newpassword']);
                    $loginModel->changePassword($id,$newPassword);
                    $data['msg'] ="Password changed successfully";
                    view::render('Home/changepassword.php',$data);
    
                }else {
                    $data['msg'] = "old password is wrong";
                    view::render('Home/changepassword.php',$data);
    
                }
    
            
        }

    } 

  






    public function logout()
    {

        session_destroy();
        return View::render('Home/login.php');
    }
}
