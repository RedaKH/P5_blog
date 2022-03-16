<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php foreach ($post as $posts) {?>
    <h1>Title : </h1>
    <h2><?php echo htmlspecialchars($posts['title']); ?></h2><br>
    <h1>Content : </h1>
    <h2><?php echo htmlspecialchars($posts['content']); ?></h2><br>
    <h1>created_at : </h1>
    <h2><?php echo htmlspecialchars($posts['created_at']); ?></h2><br>






<?php } ?> 
    
</body>
</html>


   


