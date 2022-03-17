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
    public static function can_login($username, $password)
    {
        $db = static::getDB();
        $sql = "SELECT * FROM users WHERE user = ? AND password = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$username, $password]);
        if ($stmt->rowCount()) {
            $data = $stmt->fetch();
            $SESSION['user'] = $data['user'];
        }
    }
}



    

    



    
