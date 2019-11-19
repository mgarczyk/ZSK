<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="cookie2.php" method="post">
      <input type="text" name="imie" value="" placeholder="Podaj imie">
      <input type="text" name="nazwisko" value="" placeholder="Podaj nazwisko">
      <input type="submit" name="przycisk" value="Ok">
    </form>
    <?php
    /*Użytkownik podaje swoje imię i nazwisko w formularzu
    Utwórz zmienną sesyjną w której będzie przechowywane imię oraz
    cookie dla nazwiska na 2 dni. Wyświetl dane pod formularzem pobierając je ze zmiennej sesyjnej i ciaszteczka
    Imie...
    Nazwisko...
    */
    if(isset($_POST["przycisk"])){
          $_SESSION["imie"]  = $_POST["imie"];
          setcookie("nazwisko", $_POST["nazwisko"], time()+60*60*24*2);
          $_COOKIE["nazwisko"] = $_POST["nazwisko"];
          echo $_SESSION["imie"]."<br>";
          echo $_COOKIE["nazwisko"];
    }
     ?>
  </body>
</html>
