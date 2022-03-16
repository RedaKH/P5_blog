<?php

namespace App\Models;

use PDO;


class User extends \Core\Model
{   
    private $id;
    private $username;
    private $password;
    private $email;
    

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getUser()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM user');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public  function setUser($username,$password,$email){
        $db = static::getDB();

        
        $sql = "INSERT INTO user (username, password, email) VALUES ('$username','$password','$email')";
        $stmt= $db->prepare($sql);
        $stmt->execute();
    }

    public static function connectUser($email,$password)
    {
        $db = static::getDB();
        $sql = $db->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $sql->execute();
    }

}
