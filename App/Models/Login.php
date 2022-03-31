<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Login extends \Core\Model
{



    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function canLogin($username, $password)
    {
        $db = static::getDB();

        $query = mysqli_query($db, "select * from user where username='$username' and password='$password'");
        $row = mysqli_fetch_array($query);

        if(is_array($row)){
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];

        } else{
            echo "login ou mot de passe invalide";
        } if (isset($_SESSION['username'])) {
            header("Location :dashboard.php");
        }
    }
}
