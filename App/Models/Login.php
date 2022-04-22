<?php

namespace App\Models;

use PDO;


class Login extends \Core\Model
{



   
    public static function canLogin($username, $password)
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



  
}
