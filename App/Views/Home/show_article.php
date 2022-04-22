<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>



        <div class="container">

            <h2 class="text-center mb-5 mt-5 write-white"><span class="underline">A</span>rticles</h2>
            <div class="col-sm-12">
                <div class="card mb-5">
                    <img class="card-img-top" src="<?php echo htmlspecialchars($findPost['img']); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nom article : <?php echo htmlspecialchars($findPost['title']); ?></h5>
                        <p class="card-text">
                            <small class="text-muted">admin</small>
                        </p>
                        <p class="card-text"><?php echo htmlspecialchars($findPost['content']); ?></p>
                        <p class="card-text">
                            <small class="text-muted"></small>
                        </p>
                    </div>
                </div>
         <?php foreach ($findCom as $comments) { ?>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-secondary text-center m-0"> Date du commentaire :<?php echo htmlspecialchars($comments['time']); ?></p>
                                <p class="text-secondary text-center m-0"> Nom :<?php echo htmlspecialchars($comments['name']); ?></p>

                            </div>
                            <div class="col-md-10">
                                <div class="clearfix"></div>
                                <p><?php echo htmlspecialchars($comments['content']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            







        <?php } ?>          


                

                <?php include 'insert_comment.php'; ?>

                    
            </div>







        </div>













    <?php include 'includes/footer.php'; ?>


</body>

</html>