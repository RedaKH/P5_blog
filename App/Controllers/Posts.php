<?php

namespace App\Controllers;

use App\Models\Posts as ModelsPosts;
use \Core\View;


class Posts extends \Core\Controller
{

    



    public function store_posts()
    {
        $postModel = new ModelsPosts;
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            if (empty($title) || empty($content)) {
                echo "Impossible d'envoyer votre article.";
            }


            $postModel->setPost($title, $content);
            View::render('Home/post.php');

        } else {


            View::render('Home/post.php');
        }
      
    }

    public function showPost()
    {
        $postModel = new ModelsPosts;
        $display_posts = $postModel->getPosts();

        View::render('Home/list_articles.php', ['post' => $display_posts]);
    }
    public function ArticlesAdmin()
    {
        $postModel = new ModelsPosts;
        $display_posts = $postModel->getPosts();

        View::render('Home/list_articles_admin.php', ['post' => $display_posts]);
    }


    public function selectPost()
    {
        $postModel = new ModelsPosts;

        $id_post = $_GET['id_post'];
        $findPost = $postModel->FindByID($id_post);
        $findCom = $postModel->findCommentArticle($id_post);

        View::render('Home/show_article.php', compact('findPost','findCom'));
    }

    public function DeletePost()
    {
        $postModel = new ModelsPosts;
        $id_post = $_GET['id_post'];
        $postModel->deletePost($id_post);
        $this->ArticlesAdmin();
        view::render('Home/list_articles_admin.php');

        # code...
    }

    public function UpdateaPost()
    {
        $postModel = new ModelsPosts;
        $id_post = $_GET['id_post'];
        $findPost = $postModel->FindByID($id_post);


        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $postModel->UpdatePost($title, $content, $id_post);
        }

        View::render('Home/update_post.php', compact('findPost'));
    }
    

   
}
