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

<?php foreach ($post as $posts) {?>
    <h1>Title : </h1>
    <h2><?php echo ($posts['title']); ?></h2><br>
    <h1>Content : </h1>
    <h2><?php echo ($posts['content']); ?></h2><br>
    <h1>created_at : </h1>
    <h2><?php echo ($posts['created_at']); ?></h2><br>






<?php } ?> 


<div class="container">

        <h2 class="text-center mb-5 mt-5 write-white"><span class="underline">A</span>rticles</h2>
                    <div class="col-sm-12">
                <div class="card mb-5">
                    <img class="card-img-top" src="/img\photoarticle\default.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nom article : New Tech</h5>
                        <p class="card-text">
                            <small class="text-muted">admin</small>
                        </p>
                        <p class="card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Proin eget tortor risus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                        <p class="card-text">
                            <small class="text-muted"></small>
                        </p>
                    </div>
                </div>
            </div>
        

                   

        
       

    </div>
    


</form>

   





    

    <h1>welcome</h1>

    <?php include 'includes/footer.php'; ?>

    
</body>
</html>