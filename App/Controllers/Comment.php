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

        public function edit_comments(){
            $commentsModel = new ModelsComment;
            $id_com = $_GET['id_com'];
            $edit_com = $commentsModel->singleComment($id_com);
            
            

            View::render('Home/edit_comments.php',['comment'=>$edit_com]);





        }
}
