<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php include 'includes/navbar-admin.php'?>


    <form action="" method="POST">

        <?php foreach ($comment as $comments) { ?>
            <h1>Name : </h1>
            <h2><?php echo htmlspecialchars($comments['name']); ?></h2><br>

            <h1>Content : </h1>
            <h2><?php echo htmlspecialchars($comments['content']); ?></h2><br>
            <h1>Date : </h1>
            <h2><?php echo htmlspecialchars($comments['time']); ?></h2><br>
            <a class="btn btn-primary" href='removeComments?id_com=<?php echo $comments['id_com'] ?>'>Supprimer</a> 
            <a class="btn btn-primary" href='approvedComments?id_com=<?php echo $comments['id_com']?>'>Approuver</a>








        <?php } ?>
<?php include 'includes/footer.php'?>


    </form>


</body>

</html>