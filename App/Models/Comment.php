<?php
namespace App\Models;





use PDO;


/**
 * Example user model
 *
 * PHP version 7.0
 */
class Comment extends \Core\Model
{ 
    


    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getComments()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM comment ORDER BY time DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setComment($name,$comment){
        $db = static::getDB();
        $addComment = $db->prepare(
            'INSERT INTO comment (name,content,time) 
            VALUES (:name, :content,CURRENT_TIME())'
        );

        $addComment->bindValue(':name', $name, \PDO::PARAM_STR);
        $addComment->bindValue(':content', $comment, \PDO::PARAM_STR);
        $addComment->execute();
    }
  

    public function deleteComments($id_com){
        $db = static::getDB();

         
        $stmt= $db->prepare("DELETE FROM comment WHERE id_com= $id_com");
        $deleteComments=$stmt->execute(array($id_com));
        return $deleteComments;



    }

    public function edit($id_com){
        $db = static::getDB();

         
        $stmt= $db->prepare("SELECT * FROM comment WHERE id_com= :id LIMIT 1");
        $stmt->execute(['id' => $id_com]); 
        $stmt->fetch();



    }


    



    
}