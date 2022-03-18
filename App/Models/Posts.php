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

    public function AddPost(PostsEntity $post){
        $db = static::getDB();
        $addPost = $db->prepare(
            'INSERT INTO Post (id_post, title, content,createdAt) 
            VALUES (:id_post, :title, :content, :createdAt)'
        );

        $addPost->bindValue(':id_post', $post->getId_post(), \PDO::PARAM_INT);
        $addPost->bindValue(':title', $post->getTitle(), \PDO::PARAM_STR);
        $addPost->bindValue(':content', $post->getContent(), \PDO::PARAM_STR);
        $addPost->bindValue(':createdAt', $post->getCreated_at(), \PDO::PARAM_STR);
        $addPost->execute();
}

}

