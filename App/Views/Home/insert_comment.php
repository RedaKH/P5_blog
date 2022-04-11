<?php
if (isset($msg)) {
    echo $msg;
} 

?>
<form action="/comment/storeComments?id_post=<?php echo $_GET['id_post']; ?>" method="POST">
<label for="name">Votre nom : </label><br/>
<input type="text" name="name">

    <label for="content"> commentaire : </label><br/>

<textarea id="content" name="content" 
          rows="5" cols="33">
</textarea>
<br/>

<input type="submit" name="submit" value="submit">









</form>






