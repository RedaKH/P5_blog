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

    public function oldPasswordMatches($oldpassword)
    {
        $db = static::getDB();
       $id = $_SESSION['id'];
        $query = $db->prepare('SELECT * FROM user WHERE id=? AND password=?');
        $query->bindValue(1, $id, PDO::PARAM_STR);
        $query->bindValue(2, $oldpassword, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function changePassword($id,$newpassword)
    {
        $db = static::getDB();
        $sql = "UPDATE user SET password=?, WHERE id=?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$newpassword,$id]);
    }
}
