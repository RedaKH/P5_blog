<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php include 'includes/navbar-admin.php'; ?>
<form action="" method="POST">
    
<header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Modifier votre article</h1>
                </div>
            </div>
        </header>
        <input type="hidden" name="id_post" value="<?php echo $findPost['id_post']; ?>">
        
    <label for="title">Title : </label>
<input type="text" name="title" value="<?php echo $findPost['title']; ?>"><br/>
<label for="title">Image : </label>
<input type="file" name="title" value=""><br/>
<label for="content">content : </label><br/>

<textarea id="content" name="content" 
          rows="5" cols="33">
          <?php echo $findPost['content']; ?>
</textarea>
<br/>

<input type="submit" name="submit" value="submit">
    
</body>
</html>





</form>

<?php include 'includes/footer.php'; ?>

    
</body>
</html>