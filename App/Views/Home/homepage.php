<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title> Page d'accueil</title>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

 <!-- Header - set the background image for the header in the line below-->
 <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="../../../Logo.png" alt="..." />
                <h1 class="text-white fs-3 fw-bolder">Réda Khaldi</h1>
            </div>
        </header>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Bienvenue sur mon blog ! </h2>
                        <p class="lead">Vous trouverez l'ensemble de mes projets  que j'ai fait dans des articles sur mon blog </p>
                        <p class="mb-0">En ce qui me concerne mon parcours j'ai fais un BTS SIO (Service informatiques aux organisations) en tant que développeur 
                            et là actuellement je fais une formation chez OpenClassrooms en tant que développeur PHP/Symfony, je suis également passionné de jeux vidéo étant joueur compétitif j'aime relever des nouveaux challenges et me surpasser. J'aime aussi la musique, le cinéma
                            et de la japanimation également des mangas. 
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
  
  
                    <div class="col-lg-6">
                        <p class="mb-0"><a class="btn btn-primary btn-lg rounded mt-5" role="button" href="/assets/docs/CV.pdf" download="">Télécharger mon CV</a></p>
                        <fieldset>
                                <legend>Me contacter</legend>
                                <small class="text-muted">N'hésitez pas à me contacter et je vous répondrai par email.</small>
                                <form action="/home/contact" method="post">
                                <div>
                                    <label for="emailAddress" class="form-label mt-4">Adresse email</label>
                                    <input name="emailAddress" type="text" class="form-control" id="emailAddress" aria-describedby="emailHelp" placeholder="Votre adresse email">
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <label for="firstname" class="form-label mt-4">Prénom</label>
                                        <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Votre prénom">
                                    </div>
                                    <div class="col">
                                        <label for="lastname" class="form-label mt-4">Nom</label>
                                        <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Votre nom">
                                    </div>
                                </div>
                                <div>
                                    <label for="message" class="form-label mt-4">Message</label>
                                    <textarea name="message" class="form-control" id="message" rows="3" placeholder="Votre message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary rounded mt-3">Envoyer</button>
                                </form>
                            </fieldset>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'includes/footer.php'; ?>

    

    
</body>
</html>