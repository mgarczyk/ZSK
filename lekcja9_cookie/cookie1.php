<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    setcookie("city", "Poznań", time()+60*60*24); //tworzenie cookie przechowywanego 24h
    setcookie("name", "Janusz", time()+60*60*24);
    function Show($cookie){
        echo '<pre>';
        print_r($_COOKIE);
        echo '</pre>';
    }
    Show($_COOKIE);
    setcookie("city", "", time()-1); //usuwanie cookie
    Show($_COOKIE);
     ?>
  </body>
</html>
