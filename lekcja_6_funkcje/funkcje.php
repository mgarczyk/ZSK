<?php
function value($a){
  if($a<0){
    return 'ujemna';
  }elseif($a==0){
    return 'zero';
  }else{
    return 'dodatnia';
  }
}
echo value(10)."<br>"; //dodatnia

function getValue():int{
  return 20.99;
}
echo getValue()."<br>"; //20
echo gettype(getValue())."<br>";
#######################################################################
//zmienna globalna
$x = 10;
function show(){
  echo "wartosc zmiennej \$x wynosi: $GLOBALS[x]"; //bez apostrofów bo w cudzysłowie
  echo $GLOBALS['x'];  //w apostrofach bo brak cudzysłowia
}
show();
$y = 10; //zmienna globalna
function show1(){
  global $y;
  echo "<br>Wartość zmiennej \$y wynosi: $y<br>";
}
show1();
#############################################################
//zmienna statyczna
function sum(){
  static $number = 10;  //bedzie zapamietywac wartosc zmiennej 10 20 30 po każdym wywołaniu
  echo "\$number wymosi: $number<br>";
  $number += 10;
}
 sum();
 sum();
 ################################################################
//argumenty
function add($x, $y=1){
    return $x+$y;
}
$z = 5;
echo add(2)."<br>";
echo add(5,3)."<br>";
echo add(2, $z)."<br>";
###################################################################
//argument i typy danych
function multi(float $x, int $y){ //typ float
  return $x * $y;
}
echo multi(2.5,3)."<br>";






 ?>
