<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Podstrona<hr>
    Witamy<?php echo $_SESSION["name"]; ?> na stronie.
    <a href="./sesje.php">Strona startowa</a>
  </body>
</html>
