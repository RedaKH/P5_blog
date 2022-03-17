<?php

namespace App\Controllers;

use App\Models\Login as ModelsLogin;
use App\Models\User as ModelsUser;
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



    public function loginPost(){
        $login = new ModelsLogin;
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            if(!empty($username) AND !empty($password)){
                $login->can_login($username,$password);

            }else {
                echo "please entrez un mot de passe et un login";
            }
            
}

        }

       
       


    }




   

