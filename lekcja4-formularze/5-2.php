<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    if(!empty($_GET["country"])){
      $country = $_GET["country"];
      if (strlen($country) < 10) echo "ok";{

    }else if(strlen($country) > 10){
      echo "Bledne dane";
      require_once("./formularz.html");
    }
      ?>


    ?>
  </body>
</html>
