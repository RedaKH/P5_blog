<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>créer votre article</title>
</head>
<body>

<?php include 'includes/navbar-admin.php'; ?>
<form action="" method="POST" enctype="multipart/form-data">
<header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Créer votre article</h1>
                </div>
            </div>
        </header>
        <div class="container">
        <div class="mb-3">

    <label for="title">Title : </label>
<input type="text" name="title"class="form-control" value=""><br/>

<label for="content">content : </label><br/>

<textarea id="content" name="content"
          rows="5" cols="33" class="form-control">
</textarea>
<br/>

<input type="submit" name="submit" value="submit">
        </div>
        </div>
    
</body>
</html>





</form>

<?php include 'includes/footer.php'; ?>


