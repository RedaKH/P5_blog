<?php

require_once 'vendor/autoload.php';

    $faker= Faker\Factory::create();
    $pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root');
    $sql = "INSERT INTO comment ( content,time) VALUES (?,?)";
    $stmt = $pdo->prepare($sql);
$faker = \Faker\Factory::create();
for ($i=0; $i < 100; $i++) {
  $stmt->bindValue(1, $faker->text, PDO::PARAM_STR);
  $stmt->bindValue(2, $faker->date, PDO::PARAM_STR);
  $stmt->execute();

}

       
   
  

   

    


    



    
