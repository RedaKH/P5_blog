<?php
namespace App\Models;





use PDO;



class Comment extends \Core\Model
{ 
    


    
    public static function getComments()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM comment WHERE approved = 0 ORDER BY time DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

  
  

    public function deleteComments($id_com){
        $db = static::getDB();

         
        $stmt= $db->prepare("DELETE FROM comment WHERE id_com= $id_com");
        $deleteComments=$stmt->execute(array($id_com));
        return $deleteComments;



    }
    public function approvedComment($id_com)
    {
        $db = static::getDB();
        $stmt = $db->prepare('UPDATE comment SET approved = 1 WHERE id_com = ?');
        
        $stmt->execute(array($id_com));
    }
    public function postComment($id_post,$name,$content)
    {
        $db = static::getDB();
        $req = $db->prepare('INSERT INTO comment (post_id, name,content,time,approved) VALUES(?, ?, ?, NOW(), 0)');
        $newComment = $req->execute(array($id_post,$name,$content));

        return $newComment;
    }
   

  


    



    
}