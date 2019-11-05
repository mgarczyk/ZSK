<?php

//tablice indeksowane numerycznie
$colors = array('red', 'green', 'blue');
echo "Początkowa zawartość tablicy: <br>";
for ($i=0;$i<count($colors);$i++){
  $elem = $i + 1; //aktualny inceks
  echo "Element $elem: $colors[$i]<br>";
}


 ?>
