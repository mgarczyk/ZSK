<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $text = '123ssd';
    $x = (int)$text; //rzutownaie int

    $text1 = 1;
    $x1 = (bool)$text1; //rzutowanie bool

    $text2 = 10;
    $x2 = (unset)$text2; //rzutowanie unsigned

    echo $x.'<br>';
    echo $x1.'<br>';
    echo $x2.'<br>';

    echo PHP_INT_SIZE.'<br>';

    $x = 10;
    echo is_int($x); //czy jest intem
    echo is_string($x); //czy jest stringiem
    echo is_bool($x);  //czy jest boolem
    echo is_float($x); //czy jest floatem
    echo is_null($x); //czy null

    $w;
    echo $w;
    echo @gettype($w).'<br>'; //@ pomijanie błędów

    ################################################
echo '<br>'."Port serwera ";
echo $_SERVER['SERVER_PORT'];  //port
echo '<br>'."Nazwa serwera ";
echo $_SERVER['SERVER_NAME'];  //nazwa
echo '<br>'."Nazwa skryptu ";
echo $_SERVER['SCRIPT_NAME'];  //nazwa skryptu
echo '<br>'."Protokół serwera ";
echo $_SERVER['SERVER_PROTOCOL'];  //nazwa protokołu
echo '<br>'."Folder htdocs ";
echo $_SERVER['DOCUMENT_ROOT'];  //gdzie jest folder htdocs
$lokalPlik = $_SERVER['DOCUMENT_ROOT'];
$lokalPlik .= $_SERVER['SCRIPT_NAME'];
echo '<br>'.$lokalPlik;  //miejsce w którym jest ten plik
echo '<br>';
##########################################################
define('NAZWISKO', 'Kowal'); //zmienna globalna
echo NAZWISKO.'<br>';
define('imie','Marcel');
echo imie;
define ('WIEK', 18, true);
echo '<br>'.WIEK;
##############################################################
echo PHP_VERSION; //wersja php
echo '<br>'.gettype(PHP_VERSION);
$ver = PHP_VERSION;
if ($ver > 5.6){  //sprawdzenie wersji php
  echo '<br>'."Nowa";
}else {
  echo '<br>'."Stara";
}

#################################


     ?>
  </body>
</html>
