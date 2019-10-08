<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    if(!empty($_GET["country"])){
      echo "ok";

    }else{ //zamykamy php
      ?>



    <form class="" action="5-1.php" method="get">
      <input type="text" name="country" value="" placeholder="podaj kraj">
      <input type="submit" name="" value="Potwierdź">
    </form>
    <?php   //otwieramy php
    }

    ?>
  </body>
</html>
