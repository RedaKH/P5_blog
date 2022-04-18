<?php
namespace App\Controllers;

use App\Models\Comment as ModelsComment;
use \Core\View;

class Comment extends \Core\Controller
{
     
    
    


  

        public function showComments(){
            $commentsModel = new ModelsComment;
            $display_comments = $commentsModel->getComments();
            View::render('Home/list_comments.php',['comment'=>$display_comments]);

        }

        

        public function removeComments(){
            $commentsModel = new ModelsComment;
            $id_com = $_GET['id_com'];
            
            $commentsModel->deleteComments($id_com);
            $this->showComments();


            


           




            


        }

        public function approvedComments()
        {
            $commentsModel = new ModelsComment;
            $id_com = $_GET['id_com'];
            $commentsModel->approvedComment($id_com);
            $this->showComments();

             
        }


        
        public function storeComments()
    {
        $commentsModel = new ModelsComment;
        $name = $_POST['name'];
        $content = $_POST['content'];
        $id_post = $_GET['id_post'];

         if (isset($_POST['submit'])) {
    
            if (empty($name) || empty($content)) {
                echo "Impossible d'envoyer votre commentaire.";
                return;
            }
            $commentsModel->postComment($id_post,$name,$content);
            echo "Votre commentaire est en attente d'approbation";
            exit;
        } else {
            View::render('home/insert_comment.php');
        }
    }
}
