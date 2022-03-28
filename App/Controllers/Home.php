<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
        View::render('Home/homepage.php');
    }

    public function list_articles()
    {
        View::render('Home/list_articles.php');
    }

    public function contact()
    {
        View::render('Home/contact.php');
    }
    

}
