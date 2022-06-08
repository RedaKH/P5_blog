<?php

namespace App\Models;

use PDO;


class Login extends \Core\Model
{



   
    public static function canLoginAdmin($username, $password)
    {
        $db = static::getDB();
        $query = $db->prepare('SELECT * FROM user WHERE username=? AND password=? AND role=true');
        $query->bindValue(1, $username, PDO::PARAM_STR);
        $query->bindValue(2, $password, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function makeAccount($username,$password,$email)
    {
        $db = static::getDB();
        $makeAccount = $db->prepare(
            'INSERT INTO user (username,password,email,role) 
            VALUES (:username,:password,:email,0)'
        );

        $makeAccount->bindValue(':username', $username, \PDO::PARAM_STR);
        $makeAccount->bindValue(':password', $password, \PDO::PARAM_STR);
        $makeAccount->bindValue(':email', $email, \PDO::PARAM_STR);

        $makeAccount->execute();
    }

    public static function canLogin($username, $password)
    {
        $db = static::getDB();
        $query = $db->prepare('SELECT * FROM user WHERE username=? AND password=?');
        $query->bindValue(1, $username, PDO::PARAM_STR);
        $query->bindValue(2, $password, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }



  
}
