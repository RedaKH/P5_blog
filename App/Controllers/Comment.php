<?php
namespace App\Controllers;

use App\Models\Comment as ModelsComment;
use \Core\View;

class Comment extends \Core\Controller
{
     /**
     * Show the index page
     *
     * @return void
     */


  

        public function showComments(){
            $commentsModel = new ModelsComment;
            $display_comments = $commentsModel->getComments();
            View::render('Home/show_comments.php',['comment'=>$display_comments]);

        }

        

        public function removeComments(){
            $commentsModel = new ModelsComment;
            $id_com = $_GET['id_com'];
            $commentsModel->deleteComments($id_com);

            $this->showComments();

            view::render('Home/show_comments.php');
            


           




            


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
            header('Location: posts/show_article?id_post='.$id_post);
        } else {
            View::render('posts/insert_comment.php');
        }
    }
}
