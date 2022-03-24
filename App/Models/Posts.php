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
        $stmt = $db->query('SELECT * FROM post');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function AddPost(PostsEntity $post)
    {
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

    public function pagination()
    {
        $db = static::getDB();

        $articlesPerPage=10;
        $articlestotalquery=$db->query('SELECT ID from post');
        $articlesTotal= $articlestotalquery->rowCount();
        $totalPages = ceil($articlesTotal/$articlesPerPage);

        if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page']>0 AND $_GET['page']<=$totalPages) {
            $_GET['page']= intval($_GET['page']);
            $currentPage = $_GET['page'];
        }else {
            $currentPage= 1;
        }
        $start = ($currentPage-1)*$articlesPerPage;
        $db->query('SELECT * FROM post LIMIT 4'.$start.','.$articlesPerPage);








    }

     public function FindByID($id_post)
    {
        $db = static::getDB();

         
        $stmt= $db->prepare("SELECT * FROM post WHERE id_post = :id ");
        $stmt->execute(['id' => $id_post]); 
        return $stmt->fetch();
    }

   

    


}
