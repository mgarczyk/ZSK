<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $number = 1;
    $_number = 1;
    $imię = 1;
    $Imię = 1;
    echo '$number';
    echo "<br>$number";
    $calkowita = 100;
    $szesnastkowa = 0xA;
    echo "<br>$szesnastkowa";
    $osemkowa = 010;
    echo '<br>'.$osemkowa;
    $binarna = 0b1010;
    echo '<br>',$binarna;
    //skladnia heardoc 1.Etykieta na samym początku 2. Nie może być spacji po etykietch.
    $imie = 'Janusz';
    $wiek = 20;
    $napis = <<< TEKST
    <hr>
    Masz na imię: $imie. Twój wiek to $wiek.
    <hr>
    TEKST;
    echo $napis;
    //heredoc bez zmiennych
    echo <<< JANUSZ
      Jakieś napisy.
      <br/>
      </br>
    JANUSZ;
    //składnia nowdoc do wyswietlania wszystkiego jako tekst
    $x = 'Anna';
    echo <<< 'k'
    Teraz wszytko nawet ta zmienna $x będzie tekstem.
    k;
    //wyswietlanie jednej zmiennej jako tekstu (backslash)
    echo "<br/></br>Zmienna o nazwie \$x";
    echo phpinfo(); //sprawdzenie wersji php
     ?>

  </body>
</html>
