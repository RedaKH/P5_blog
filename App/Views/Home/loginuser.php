<?php
include 'includes/navbar.php'; ?>

<div class="container-login">
    <div class="wrapper-login">

        <form class="container mt-5 write-white" action="/login/loginPostUser" method="post">

            <h2 class="text-center mb-5"><span class="underline">C</span>onnexion Utilisateur</h2>

            <p id="error" class="row d-flex justify-content-center "> <?php if (isset($data)) {
                                                                            echo $data;
                                                                        } ?> </p>

            <div class="row d-flex justify-content-center form-group">
                <input required="" name="username" type="username" class="form-control col-md-3" placeholder="Adresse mail">
            </div>
            <div class="row d-flex justify-content-center form-group">
                <input required="" name="password" type="password" class="form-control col-md-3">
            </div>
            <div class="row d-flex justify-content-center mt-5 mb-5">
                <button id="submit" type="submit" name='submit' value="submit" class="btn-arrow">Connexion</button>
            </div>
        </form>