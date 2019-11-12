<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    //TABLICE JEDNOWYMIAROWE
    $colors = array('red', 'green', 'blue' );
    function show($tab){
      for($i=0;$i<count($tab);$i++){
        echo $tab[$i]."<br>";
      }

    }
    echo 'Wyświetlanie tablicy $colors za pomocą funkcji show()<br>';
    show($colors);
    echo '<br>';
    $data = array(
    'name' => 'Marcel',
    'surname' => 'Garczyk',
    'age' => 18
  );
  echo 'Wyświetlanie tablicy $data foreachem<br>';
  foreach ($data as $key => $value) {
    echo $value."<br>";
  }
  echo "<br>";
  echo 'Wyświetlanie tablicy $data foreachem z pokazaniem klucza<br>';
  foreach ($data as $key => $value) {
    echo "$key=>$value<br>";
  }
  //TABLICE DWUWYMIAROWE
  $student = array(
      array('Anna', 'Nowak', 27),
      array('Anna', 'Kowalska', 25),
      array('Jakub', 'Nowakowski', 22)
    );
    echo '<br>';
    echo 'Wypisanie tablicy dwuwymairowej $student<br>';
    function forem($tab){
    for($i=0;$i<count($tab);$i++){
      for($j=0;$j<count($tab[$i]);$j++){  //for do dwuymiarowych
        echo $tab[$i][$j]."<br>";
        }
      }
    }
    forem($student);  //wyswietlenie
    echo '<br>';
    echo "Dwuwymiarowa foreachem<br>";
    function foreachem($tab){
      foreach ($tab as $key => $value) {
            foreach ($value as $key => $wyswietl) {  //foreach dla dwuwimairowych
              echo $wyswietl."<br>";
            }
          }
        }
    foreachem($student); //wyswietlanie
    echo "<br>";

    //Tablica trójwymiarowa napisać
    //SORTOWANIE
    echo "Przed sortowaniem<br>";
    $sortowanie = array(8,6,7,9,4,5,3,2,10,1);
    function wyswietl($tab){
      foreach ($tab as $key => $value) {
          echo  $value."<br>";
      }
    }
    wyswietl($sortowanie);
    echo "<br>";
    echo "Po sortowaniu<br>";
    sort($sortowanie);
    wyswietl($sortowanie);
    echo "<br>";
    echo "Reverse sort<br>";
    rsort($sortowanie);
    echo wyswietl($sortowanie);
    echo "<br>";
    echo "Sortowanie string. Przed<br>";
    $imie = array("Marcel", "Maks", "Adam");  //sortowanie stringa
    echo wyswietl($imie);
    echo "<br>";
    echo "Po sortowaniu<br>";
    sort($imie);
    echo wyswietl($imie);
    echo "<br>";

    //SORTOWANIE ASOCJACYJNEJ
    echo "Sortowanie asocjacyjnej. Przed:<br>";
    $asocjacyjna = array(
      "imie" => 'Marcel',
      "nazwisko" => 'Garczyk',
      "wiek" => '18'

    );
    function wyswietl_foreach($tab){
    foreach ($tab as $key => $value) {
      echo $value."<br>";
    }
  }
  wyswietl_foreach($asocjacyjna);
  echo "<br>";
  echo "Po sortowaniu<br>";
  asort($asocjacyjna);
  wyswietl_foreach($asocjacyjna);
  echo "<br>";
  echo "Odwrotne asocjacyjnej<br>";
  rsort($asocjacyjna);
  wyswietl_foreach($asocjacyjna);
  echo "<br>";
  echo "Sortowanie z kluczem. Przed:<br>";
  $asocjacyjna = array(
    "imie" => 'Marcel',
    "nazwisko" => 'Garczyk',
    "wiek" => '18'

  );
  function wyswietl_foreach_z_klucz($tab){
  foreach ($tab as $key => $value) {
    echo "$key => $value.<br>";
    }
  }
  wyswietl_foreach_z_klucz($asocjacyjna);
  echo "<br>";
  echo "Sortowanie z kluczem po<br>";
  ksort($asocjacyjna);
  wyswietl_foreach_z_klucz($asocjacyjna);
  echo "<br>";
  echo "Sortowanie z kluczem  odwrtonie<br>";
  krsort($asocjacyjna);
  wyswietl_foreach_z_klucz($asocjacyjna);
  echo "<br>";











      ?>
  </body>
</html>
