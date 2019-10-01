<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $text = <<< TEKST
       zsk - zespol
       szkol
       kominuikacji
       TEKST;
       echo "przed wywolaniem funkcji nl2br: <br>.$text.<br>";
       echo "Po wywolaniu funkcji nl2br:<br>";
       echo nl2br($text)."<br>";
       //Zamiana na mełe litery
       echo strtolower($text).'<br>';
       //Zamiana na duze litery
       echo strtoupper($text).'<br>';
       //zamiana pierwszej litery na duza
       $text = 'anna Agnieszka tomasz';
       echo ucfirst($text)."<br>";
       //zamiana wszystkich pierwszych liter na duze
       echo ucwords($text)."<br>";
       //maksymalna ilosc znaków w kolumnie
       $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
       $kolumna  = wordwrap($lorem, 40, '<br>');
       echo $kolumna."<br>";
       //usuwanie bialych znakow
       $name = 'kasia';
       $name1 = '   kasia';
       echo 'Długość zmiennej $name: '.strlen($name).'<br>'; //dlugosc zmiennej
       echo 'Długość zmiennej $name1: '.strlen($name1).'<br>'; //dlugosc zmiennej
       echo strlen(ltrim($name1))."<br>"; //usuwanie bailych znakow z lewej strony
       echo strlen(rtrim($name1))."<br>"; //usuwanie z prawej strony
       echo strlen(trim($name1))."<br>"; //usuwanie z obu stron
       $address = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
       $search = strstr($address, 'tel'); //szuka podany ciąg znakówarning i wyswietla reszte stringa "tel"
       echo $search."<br>";

       $address1 = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
       $search1 = strstr($address, 'tel', true); //wyswietli do danego ciagu znaków "tel"
       echo $search1."<br>";

       $address2 = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
       $search2 = stristr($address2, 'Tel', true); //stristr nie bedzie bral pod uwage wielkości liter znajdzie i male i duze
       echo $search2."<br>";
       $mail = "zsk.pozna@wp.pl";
       $serach3 = strstr($mail,"@");
       echo $serach3."<br>";
       $search4 = strstr($mail, 64);
       echo $search4."<br>";
       #####################################################################
       $ciag1 = "a";
       $ciag2 = "aaaa";
       echo strcmp($ciag1, $ciag2); //-1
       echo strcmp("zzz", "zzz"); //0 zgodne
       echo strcmp("zza", "zzz"); //-1
       echo strcmp("zzz", "zza"); //1
       echo '<br>';
       $pos = strpos("abcds", "cds"); //znajduje pozycje początkową ciągu
       echo $pos;
       echo "<br>";
       $pos = strpos("abcd", "abc");  //to samo
       echo $pos;
       echo "<br>";
       $text1 = 'abcdefgh'; //sprawdzanie czy jedno jest w drugim
       $text2 = 'ab';
       // echo strpos($text1, $text2);
       //z1 Sprawdź czy w podanycm ciągu znaków znjaduje się drugoi ciąg
       if (strpos($text1, $text2) === false) echo "Ciąg $text2 został znaleziony w ciągu $text1";
       else "Nie został znaleziony";
       $replace = str_replace('%name', 'Janusz', 'Mam na imię %name'); //podmianka na dane imię
       echo "<br>$replace";
       //WAŻNE
       $surname = substr('Janusz Kowalski', 2); //substring (bierze od 3 miejsca)
       echo "<br>$surname";
       $surname = substr('Janusz Kowalski', 7, 5); //wycinmy cześć podajemy od którego ile znaków
       echo "<br>$surname.<br>";
       $login = "bączek";
       $censore = array("ą", "ę", "ć", "ó", "ł", "ż", "ź", "ś", "ń" );
       $replace = array("a", "e", "c", "u", "l", "z", "z", "s", "n" );
       $newlogin = str_replace($censore, $replace, $login);  //usuwanie polskich znaków
       echo $newlogin."<br><br>";
       /* z2 Napisz aplikację cenzurującą zdanie podane przez użytkownika
       Użytkownik podaje dane w formularzu */
       echo <<< FORM
       <form class="" action="string.php" method="post">
         <input type="text" name="dane" placeholder="wpisz zdanie"><br><br>
         <input type="submit" name="przycisk" value="Zatwierdź">
       </form>
       FORM;
       if (isset($_POST["dane"])){  //sprawdzanie czy sitnieje zmienna dane innaczej wyrzuca notice
       $data = $_POST["dane"];
      //przenisc } na koniec
     $niedozwolone = array("czarny", "biały");
     $zamiana = '#######';
     $poprawne = str_ireplace($niedozwolone, $zamiana, $data);//ireplace nie zwaraca uwagi na to czy lietra jest mała czy duża
     echo $poprawne;
     echo "<h6>Błędne dane: $data<h6>";
     echo "<h3>Porawne dane: $data<h3>";
   }
    ?>


  </body>
</html>
