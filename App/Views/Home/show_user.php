<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php foreach ($user as $users) {?>
    <h1>Username : </h1>
    <h2><?php echo htmlspecialchars($users['username']); ?></h2><br>
    <h1>Email : </h1>
    <h2><?php echo htmlspecialchars($users['email']); ?></h2><br>
    






<?php } ?> 
</body>
</html>
