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
    public static function can_login($username)
    {
        $db = static::getDB();
        $sql = "SELECT * FROM `user` WHERE `username` = :username";
        $stmt = $db->pdo->prepare($sql);
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        $stmt->rowCount();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}
