<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //operatory
    $potęga = 2**10;
    echo $potęga;
    $modulo = 30%3;
    //operatory bitowe and &, or |, not ~, xor ^, przesuniecie bitowe w lewo >>, przesuniecie bitowe w prawi <<
    $dziesiec = 0b1010;
    echo '<br>',$dziesiec,'<br/>';
    $dziesiec = $dziesiec >> 1; //0b1010 przechodzi w 0b101
    echo $dziesiec,'<br/>';
    $dziesiec = $dziesiec << 2; //0b101 przechodzi w 0b10100
    echo $dziesiec,'<br>';
    //operatory logiczne and &&, or ||, xor(negacja) !

    /* ZADANIE sprawdź czy w sklepie kupisz rower lub hulajnoge
    Musi być otwarty i muszą być peniądze i musi być rower lub hulajnoga.
    */

    $sklep = 'otwarty';
    $pieniądze = 1500;
    $rower = false;
    $hulajnoga = true;
    if ($sklep == 'otwarty' && $pieniądze >= 1500  && ($rower || $hulajnoga)){ //mozna $rower == true ale sprawdzamy tylko prawde wiec skrótowo
    if ($rower) {
      echo 'Kupiłeś rower';
    }else {
      echo 'Kupiłeś hulajnoge';
    }
  }else {
    echo 'Nic nie kupiłeś';
  }

  echo '<hr>';
  //Ptrójny operator porównania
  $a = 1.0;
  $b = 1;
  if ($a === $b){
    echo 'identyczna';
  } else {
      echo 'identyczne';
  }
  echo '<hr>';

  $x = 11;
  $y = 11;
  $wynik = $x <=> $y; //potrojny operator porównania
  echo $wynik;

  echo '<hr>';

  echo gettype($x),'<br>'; //integer
  echo gettype($y),'<hr>'; //integer sparawdznie jakiego typu jest zmienna

  $x = 2;
  echo $x++; //2 najpierw sie wyswietli potem doda
  echo ++$x; //4
  echo $x;  //4
  $y = $x++;
  echo $y;
  $y = ++$x;
  echo $y;
  echo ++$y;



?>
</html>
