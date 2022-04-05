<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'includes/navbar-admin.php'; ?>
    <?php if(isset($msg)){
	echo $msg;
}

?>
    <form action="/login/updatePassword" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="old_password">Old Password</label>
      </div>
      <div class="col-75">
        <input type="pass_word" id="oldpassword" name="old_password" placeholder="Old Password">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="new_password">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="new_password" name="new_password" placeholder="New Password">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>


    </form>


    
</body>
</html>