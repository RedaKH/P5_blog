<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <?php include 'includes/navbar-admin.php'; ?>
    <form action="" method="post">
        <h2 class="text-center mb-5 mt-5 write-white"><span class="underline">A</span>rticles</h2>
        <?php foreach ($post as $posts) { ?>

        <div class="container">

                <div class="row">

                    <div class="col-md-10 pl-0 pr-0">
                        <div class="card m-5">
                            <img class="card-img-top" src="\img\photoarticle\default.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Nom article :<?php echo htmlspecialchars($posts['title']); ?></h5>
                                <p class="card-text">
                                    <small class="text-muted">admin</small>
                                </p>
                                <p class="card-text"><?php echo htmlspecialchars($posts['content']); ?></p>
                                <p class="card-text">
                                    <small class="text-muted">Date de création : <?php echo htmlspecialchars($posts['created_at']); ?></small>
                                </p>
                                <a class="btn btn-primary" href='selectPost?id_post=<?php echo $posts['id_post'] ?>'>Read more →</a>   
                                <a class="btn btn-primary" href='DeletePost?id_post=<?php echo $posts['id_post'] ?>'>Supprimer</a> 
                                <a class="btn btn-primary" href='UpdateaPost?id_post=<?php echo $posts['id_post'] ?>'>Mettre a jour</a>   
  

                            
                            </div>
      
                            </div>

                        </div>


                    </div>
                </div>







            <?php } ?>




    </form>




    <?php include 'includes/footer.php'; ?>

</body>

</html>