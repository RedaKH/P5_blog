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


        if(isset($_POST['submit'])) {
          $username=$_POST['username'];
          $password=$_POST['password'];

          $email= $_POST['email'];
          $users = $modelUser->setUser($username,$email,$password);
          echo"success";



              

          


        }else {
            
            View::renderTemplate('Home/User.html');

        }


    }

    public function show_user(){
        $userModel = new ModelsUser;
        $display_user= $userModel->getUser();

       // var_dump($display_user);

        View::renderTemplate('Home/show_user.html',['user' => $display_user]);


    }
}
