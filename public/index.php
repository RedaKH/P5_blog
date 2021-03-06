<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'home', 'action' => 'index']);


$router->add('{controller}/{action}');
$router->add('home/homePage', ['controller' => 'home', 'action' => 'homePage']);
$router->add('home/login', ['controller' => 'home', 'action' => 'login']);
$router->add('home/contact', ['controller' => 'home', 'action' => 'contact']);
$router->add('user/store_user', ['controller' => 'user', 'action' => 'store_user']);
$router->add('user/show_user', ['controller' => 'user', 'action' => 'show_user']);
$router->add('posts/store_posts', ['controller' => 'posts', 'action' => 'store_posts']);
$router->add('posts/showPost', ['controller' => 'posts', 'action' => 'showPost']);
$router->add('posts/ArticlesAdmin', ['controller' => 'posts', 'action' => 'ArticlesAdmin']);
$router->add('posts/selectPost', ['controller' => 'posts', 'action' => 'selectPost']);
$router->add('posts/DeletePost', ['controller' => 'posts', 'action' => 'DeletePost']);
$router->add('posts/UpdateaPost', ['controller' => 'posts', 'action' => 'UpdateaPost']);
$router->add('posts/commentbyPost', ['controller' => 'comment', 'action' => 'commentByPost']);
$router->add('comment/storeComments', ['controller' => 'comment', 'action' => 'storeCommments']);
$router->add('comment/showComments',['controller'=>'comment','action'=>'showComments']);
$router->add('comment/removeComments',['controller'=>'comment','action'=>'removeComments']);
$router->add('comment/approvedComments',['controller'=>'comment','action'=>'approvedComments']);
$router->add('posts/comment/storeComments',['controller'=>'comment','action'=>'storeComments']);
$router->add('login/loginPostAdmin', ['controller' => 'login', 'action' => 'loginPost']);
$router->add('login/loginPostUser', ['controller' => 'login', 'action' => 'loginPost']);

$router->add('login/makeAccount', ['controller' => 'login', 'action' => 'makeAccount']);



$router->add('login/logout', ['controller' => 'login', 'action' => 'logout']);
























    
$router->dispatch($_SERVER['QUERY_STRING']);
