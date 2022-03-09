<?php
namespace App\Controllers;

use App\Models\Comment as ModelsComment;
use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Comment extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Home/index.html');
    }

    public function store_comments(){
        $commentsModel = new ModelsComment;
        


        if(isset($_POST['submit'])) {
          $comment= $_POST['comment'];
         $comments = $commentsModel->setComment($comment);




          echo"success";



              

          


        }else {
            
            View::renderTemplate('Home/comment.html');

        }}

        public function show_comments(){
            $commentsModel = new ModelsComment;
            $display_comments = $commentsModel->getComments();
                
            

            View::renderTemplate('Home/comment.html',['comment'=>$display_comments]);




        }

        public function remove_comments(){
            $commentsModel = new ModelsComment;
            $delete_comments = $commentsModel->deleteComments($id_comments);


            

            View::renderTemplate('Home/comment.html');

        }
        
        
}
