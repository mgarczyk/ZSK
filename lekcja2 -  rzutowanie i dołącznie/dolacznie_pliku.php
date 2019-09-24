<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Plik główny
    <?php include_once('./plik1.php'); //once - czyli dołączymy tylko raz i nie dołączy się ponownie
          include('./plik1.php');
          //require('./plik15.php'); //plik "plik15.php" nie istniej wiec do co jest wymagane nie istniej reszta kodu sie nie wykona
          //echo "To sie nie wykona";

     ?>
  </body>
</html>
