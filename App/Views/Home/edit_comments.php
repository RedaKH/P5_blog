<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="comment/edit_comments" method="POST">
        <?php foreach ($comment as $comments) { ?>
    <input type="hidden" name="com_id" value="<?php echo $comments['id_com']; ?>">


<label>Modifier un commentaire : </label><br/>

<textarea id="comment" name="content" value="<?php echo htmlspecialchars($comments['content']); ?>"
          rows="5" cols="33">
</textarea>
<br/>

<?php } ?>


<input type="submit" name="update" value="update">


</form>
    
</body>
</html>