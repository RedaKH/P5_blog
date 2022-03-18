<?php
namespace App\Models;
namespace App\Models\Entity;

use App\Models\Entity\CommentEntity;




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

    public function setComment($comment){
        $db = static::getDB();
        $sql = "INSERT INTO comment ( content,time) VALUES ('$comment',CURRENT_TIME())";
  

        
        $stmt= $db->prepare($sql);
        $stmt->execute();
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
        $selectFindbyId = $stmt->fetch();



    }

    public function update($data,$com_id){

        

    }

    



    
}