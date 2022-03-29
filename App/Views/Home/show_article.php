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
<form action="" method="post">

    

    <div class="container">

        <h2 class="text-center mb-5 mt-5 write-white"><span class="underline">A</span>rticles</h2>
                    <div class="col-sm-12">
                <div class="card mb-5">
                    <img class="card-img-top" src="/img\photoarticle\default.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nom article : <?php echo $findPost['title']; ?></h5>
                        <p class="card-text">
                            <small class="text-muted">admin</small>
                        </p>
                        <p class="card-text"><?php echo $findPost['content']; ?></p>
                        <p class="card-text">
                            <small class="text-muted"></small>
                        </p>
                    </div>
                </div>
                <form action="" method="POST">
<label for="name">Votre nom : </label><br/>
<input type="text" name="name">

    <label for="comment">commentaire : </label><br/>

<textarea id="comment" name="comment" 
          rows="5" cols="33">
</textarea>
<br/>

<input type="submit" name="submit" value="submit">

                </form>
            </div>
        

                   

        
       

    </div>
    


</form>

   





    


    <?php include 'includes/footer.php'; ?>

    
</body>
</html>