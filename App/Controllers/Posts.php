<?php
namespace App\Controllers;

use App\Models\Posts as ModelsPosts;
use \Core\View;


/**
 * Home controller
 *
 * PHP version 7.0
 */
class Posts extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
 

    
    public function store_posts(){
        $postModel = new ModelsPosts;
        


        if(isset($_POST['submit'])) {
          $title=$_POST['title'];
          $content=$_POST['content'];

          $postModel->AddPost($title,$content);


         


          echo"success";



              

          


        }else {
            
            View::render('Home/post.php');

        }}

        public function show_post(){
            $postModel = new ModelsPosts;
            $display_posts = $postModel->getPosts();

            View::render('Home/list_articles.php',['post' => $display_posts]);




        }

       /* public function pages(){

            $postModel = new ModelsPosts;
            $page = $postModel->pagination();
            View::render('Home/list_articles.php',['page'=>$page]);



           



       }*/
        public function selectPost()
        {
            $postModel = new ModelsPosts;

            $id_post = $_GET['id_post'];
            $findPost = $postModel->FindByID($id_post);

            
            

            View::render('Home/show_article.php',compact('findPost'));
        }
        
        public function DeletePost()
        {
            $postModel = new ModelsPosts;
            $id_post = $_GET['id_post'];
            $delete=$postModel->deletePost($id_post);
            $this->show_post();

            

           

            if($delete===true){
                echo "data deleted success";





               

 


            }

            # code...
        }

        public function UpdatePost()
        {
            # code...
        }

        


        

   
}
