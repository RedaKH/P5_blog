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
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];


        if (strcmp($old_password, $new_password) == 0) {
            $msg = "ces mots de passes doivent être différents";
        } else {
            $id = $_SESSION['id'];
            if ($loginModel->oldPasswordMatches($id, $old_password)) {
                $loginModel->changePassword($id, $new_password);
                $msg = " votre mot de passe a bien été changé";
            } else {
                $msg = "changement incorrect";
            }
            view::render('Home/changepassword.php',array('msg'=>$msg));

        }

    }






    public function logout()
    {

        session_destroy();
        return View::render('Home/login.php');
    }
}
