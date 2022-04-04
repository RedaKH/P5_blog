
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'includes/navbar-admin.php' ?>

    
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>

    <a href="/login/logout" class="">Logout</a>

    <?php include 'includes/footer.php'?>
    
</body>
</html>