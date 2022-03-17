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
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('user/store_user', ['controller' => 'user', 'action' => 'store_user']);
$router->add('user/show_user', ['controller' => 'user', 'action' => 'show_user']);
$router->add('user/auth', ['controller' => 'user', 'action' => 'auth']);

$router->add('posts/store_posts', ['controller' => 'posts', 'action' => 'store_posts']);
$router->add('posts/show_post', ['controller' => 'posts', 'action' => 'show_post']);
$router->add('comment/store_comments', ['controller' => 'comment', 'action' => 'store_comments']);
$router->add('comment/show_comments', ['controller' => 'comment', 'action' => 'show_comments']);
$router->add('comment/remove_comments', ['controller' => 'comment', 'action' => 'remove_comments']);
$router->add('comment/edit_comments', ['controller' => 'comment', 'action' => 'edit_comments']);
$router->add('login/login_post', ['controller' => 'login', 'action' => 'login_post']);






















    
$router->dispatch($_SERVER['QUERY_STRING']);
