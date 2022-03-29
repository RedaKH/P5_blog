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
    public function indexAction()
    { $commentsModel = new ModelsComment;

        View::render('Home/show_comments.php');
    }

    public function store_comments(){
        $commentsModel = new ModelsComment;
        


        if(isset($_POST['submit'])) {
          $comment= $_POST['comment'];
          $name= $_POST['name'];

         $commentsModel->setComment($name,$comment);




          echo"success";



              

          


        }else {
            
            View::render('Home/comment.php');

        }}

        public function show_comments(){
            $commentsModel = new ModelsComment;
            $display_comments = $commentsModel->getComments();
                
            

            View::render('Home/show_comments.php',['comment'=>$display_comments]);




        }

        public function remove_comments(){
            $commentsModel = new ModelsComment;
            $id_com = $_GET['id_com'];
            $delete=$commentsModel->deleteComments($id_com);


            
            $this->show_comments();

            

           

            if($delete===true){
                echo "data deleted success";





               

 


            } else {
                echo "data fail";
            }

           




            


        }
        public function edit_comments(){
            $commentsModel = new ModelsComment;
            $id_com = $_GET['id_com'];
            $edit_com = $commentsModel->edit($id_com);
            
            

            View::render('Home/edit_comments.php',['comment'=>$edit_com]);





        }
}
