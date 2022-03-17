<?php

namespace App\Controllers;

use App\Models\User as ModelsUser;
use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class User extends \Core\Controller
{



   
    public function store_user(){
        $modelUser = new ModelsUser;


        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

            $email = $_POST['email'];
            $users = $modelUser->setUser($username, $email, $password);
            echo "success";
        } else {

            View::render('Home/User.php');
         } 

        




    }

    public function show_user(){
        $userModel = new ModelsUser;
        $display_user= $userModel->getUser();

       // var_dump($display_user);

        View::render('Home/show_user.php',['user' => $display_user]);


    }

   
}
