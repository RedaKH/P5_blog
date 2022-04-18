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
  <?php if(isset($errors)) {
    echo $errors;
  }

  ?>
  <form action="/login/updatePassword" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="current_password">Current Password</label>
      </div>
      <div class="col-75">
        <input type="password" name="currentpassword">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="new_password">New Password</label>
      </div>
      <div class="col-75">
        <input type="password" name="newpassword" placeholder="New Password">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="submit" name="submit">
    </div>


  </form>



</body>

</html>