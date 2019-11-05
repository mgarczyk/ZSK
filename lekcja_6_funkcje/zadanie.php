<!--
    Uzytkownik podaje z klawiatury ilosc osob w rodzinie
    Po prawidlowym podaniu liczby z przedzialu <1;70>
    Na ekranie wyswietli sie tyle pol numerycznych ile jest osob w
    rodzinie. Napisz funkcje, ktora obliczy sredni wiek, najmlodsza
    i najstarsza osobe z rodziny i wyswietli w liscie punktowanej w formacie:
    * Średni wiek: ...lat
    * Najmłodsza osoba ma ...lat
    * Najstarsza osoba ma ...lat

-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="zadanie.php" method="post">
       <input type="number" name="ilosc" value="" placeholder="Podaj ilosc członków rodziny.">
       <input type="submit" name="przycisk_ilosc" value="Ok">
       <br>
       <br>
       <br>
    </form>
    <?php

    function maxi($tab, $ilosc){
      $maxi = $tab[0];
      for($i = 1;$i<$ilosc;$i++) if($tab[$i] > $maxi) $maxi=$tab[$i];
      return $maxi;
    }

    function mini($tab, $ilosc){
      $mini = $tab[0];
      for($i=1;$i<$ilosc;$i++) if($tab[$i] < $mini) $mini = $tab[$i];
      return $mini;
    }

    function srednia($tab, $ilosc){
      $suma = 0;
      for($i=0;$i<$ilosc;$i++) $suma+=$tab[$i];
      $srednia = $suma/$ilosc;
      return $srednia;
    }

      if(isset($_POST["przycisk_ilosc"])){
        $ilosc = $_POST["ilosc"];
        if ($ilosc<1 || $ilosc>70 ) echo "Podano wartość spoza zakresu";
        else{
          echo "<form method='post'>";
          for($i=0;$i<$ilosc;$i++) echo "<input type='number' name='$i' value='' placeholder='Podaj wiek.'><br><br>";
          echo "<input type='hidden' name='ilosc' value='$ilosc'>";
          echo "<input type='submit' name='przycisk_wiek' value='Ok'>";
        }
      }

      if(isset($_POST["przycisk_wiek"])){
        $ilosc = $_POST['ilosc'];
        $tab = array();
        $blad = false;
        for($i=0;$i<$ilosc;$i++){
          if($_POST["$i"] < 0 || $_POST["$i"] > 140){
            echo "Podałeś dane spoza zakresu (0-140)";
            $blad = true;
            break;
          }else{
            $tab[$i] = $_POST[$i];
          }
        }
        if ($blad == false){
        $maxi = maxi($tab, $ilosc);
        $mini = mini($tab,$ilosc);
        $srednia = srednia($tab, $ilosc);
        echo <<< ETYKIETA
        <ul>
        <li>Średni wiek: $srednia lat</li>
        <li>Najmłodsza osoba ma $mini lat</li>
        <li>Najstarsza osoba ma $maxi lat</li>
        </ul>
        ETYKIETA;
      }
    }
    ?>
  </body>
</html>
