<?php
namespace App\Models;

use PDO;


class Posts extends \Core\Model
{     
    private $title;
    private $content;

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getPosts()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM post');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setPost($title,$content){
        $db = static::getDB();

        
        $sql = "INSERT INTO post (title, content,created_at) VALUES ('$title','$content',CURRENT_TIME())";
        $stmt= $db->prepare($sql);
        $stmt->execute();
    }
}

