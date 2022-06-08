<?php

namespace App\Controllers;

use \Core\View;


class Home extends \Core\Controller
{

    public function index()
    {
        View::render('Home/homepage.php');
    }
    public function homePage()
    {
        View::render('Home/homepage.php');
    }

    public function list_articles()
    {
        View::render('Home/list_articles.php');
    }

    public function loginadmin()
    {
        View::render('Home/loginadmin.php');
    }

    public function loginuser()
    {
        View::render('Home/loginuser.php');
    }
    public function contact()
    {
        // Check for empty fields
        if (
            empty($_POST['firstname']) ||
            empty(($_POST['lastname']) ||
            empty($_POST['emailAddress']) ||
            empty($_POST['message']) ||
            !filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL))
        ) {
            echo "No arguments Provided!";
            return false;
        }

        $firstname = strip_tags($_POST['firstname']);
        $lastname = strip_tags($_POST['lastname']);
        $email_address = strip_tags($_POST['emailAddress']);
        $message = strip_tags($_POST['message']);



        // Create the email and send the message
        $to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = "Website Contact Form:  $firstname $lastname";
        $email_body = "Vous avez reçu un nouveau message de votre formulaire de contact.\n\n" . "Voilà les détails:\n\n Prénom: $firstname\n\n Nom: $lastname\n\nEmail: $email_address\n\nMessage:\n$message";
        $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        $headers = "Reply-To: $email_address";
        mail($to, $email_subject, $email_body, $headers);
        return true;

        view::render('Home/homepage.php');
    }
    


    

}
