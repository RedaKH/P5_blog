<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Liste de commentaires </title>
</head>

<body>
    <?php include 'includes/navbar-admin.php' ?>

     <div class="row d-flex justify-content-center mt-100 mb-100">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="card-title">Liste des commentaires</h4>
            </div>
            <div class="comment-widgets">
                <!-- Comment Row -->
                <?php foreach ($comment as $comments) { ?>

                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="comment-text w-100">
                        <h6 class="font-medium"> Nom : <?php echo $comments['name']; ?></h6> <span class="m-b-15 d-block"><?php echo htmlspecialchars($comments['content']); ?> </span>
                        <div class="comment-footer"> <span class="text-muted float-right"><?php echo $comments['time']; ?></span> <a href='removeComments?id_com=<?php echo $comments['id_com'] ?>'>Supprimer</a>
                                <a href='approvedComments?id_com=<?php echo $comments['id_com'] ?>'>Approuver
                                </a> </div>
                    </div>
                </div> 
               <?php } ?> <!-- Comment Row -->
               
            </div> <!-- Card -->
        </div>
    </div>
</div>

            

           

        




</body>

</html>