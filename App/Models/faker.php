<?php

require_once 'vendor/autoload.php';

    $faker= Faker\Factory::create();
    $pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root');
    $sql = "INSERT INTO comment ( name,content,time,post_id) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($sql);
$faker = \Faker\Factory::create();
for ($i=0; $i < 100; $i++) {
  $stmt->bindValue(1, $faker->text, PDO::PARAM_STR);
  $stmt->bindValue(2, $faker->text, PDO::PARAM_STR);
  $stmt->bindValue(3, $faker->date, PDO::PARAM_STR);
  $stmt->bindValue(4, $faker->randomDigit()
  , PDO::PARAM_STR);

  $stmt->execute();

}

       
   
  

   

    


    



    
