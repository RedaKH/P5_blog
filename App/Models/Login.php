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
    public static function can_login($username,$password)
    {
        $db = static::getDB();
        $myQuery = "SELECT * FROM user WHERE username = '".$username."' and password = '".$password."'";
        $results = $db->query($myQuery);
        return $results->fetch_array(); 
    }
    
}
