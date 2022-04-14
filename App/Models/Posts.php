<?php

namespace App\Models;

use PDO;




class Posts extends \Core\Model
{


    public function __construct()
    {
    }

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getPosts()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM post ORDER BY created_at DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setPost($title,$content)
    {
        $db = static::getDB();
        $addPost = $db->prepare(
            'INSERT INTO post (title,img,content,created_at) 
            VALUES (:title,:content,CURRENT_TIME())'
        );

        $addPost->bindValue(':title', $title, \PDO::PARAM_STR);
        $addPost->bindValue(':content', $content, \PDO::PARAM_STR);
        $addPost->execute();
    }

    public function deletePost($id_post)
    {
        $db = static::getDB();


        $stmt = $db->prepare("DELETE FROM post WHERE id_post= $id_post");
        $deleteComments = $stmt->execute(array($id_post));
        return $deleteComments;
    }

   
    public function FindByID($id_post)
    {
        $db = static::getDB();


        $stmt = $db->prepare("SELECT * FROM post WHERE id_post = :id ");
        $stmt->execute(['id' => $id_post]);
        return $stmt->fetch();
    }

    public function UpdatePost($title,$content,$id_post)
    {
        $db = static::getDB();

        $sql = "UPDATE post SET title=?, content=? ,created_at = NOW() WHERE id_post=?";
        $stmt = $db->prepare($sql);
         $stmt->execute([$title, $content,$id_post]);
        
    }
    public function findCommentArticle($id_post)
    {
        $db = static::getDB();


        $stmt = $db->prepare("SELECT * FROM comment WHERE post_id = :id AND approved=1");
        $stmt->execute(['id' => $id_post]);
        return $stmt->fetchAll();
    }

   
   
}
