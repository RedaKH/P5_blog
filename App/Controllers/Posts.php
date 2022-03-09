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

          $posts = $postModel->setPost($title,$content);


         


          echo"success";



              

          


        }else {
            
            View::renderTemplate('Home/post.html');

        }}

        public function show_post(){
            $postModel = new ModelsPosts;
            $display_posts = $postModel->getPosts();

            View::renderTemplate('Home/show_posts.html',['post' => $display_posts]);




        }

   
}
