
<?php
include 'includes/navbar.php'; ?>

<div class="container-login">
    <div class="wrapper-login">
        <h2>Sign in</h2>
        <?php echo isset($data) ? $data : ''; ?>  


        <form action="/login/loginPost" method ="POST">
            <input type="text" placeholder="Username" name="username">
            

            <input type="password" placeholder="Password" name="password">
            
            
    </div>


            <button id="submit" type="submit" name='submit' value="submit">Submit</button>



</form>

