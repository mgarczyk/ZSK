<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo '<form method="post">';
      for($i=0;$i<5;$i++){
        echo "<input type='number' name='$i' value='' placeholder='Podaj wiek.'><br><br>";

      }
      echo '<input type="hidden" name="ilosc" value="5">';
      echo '<input type="submit" name="przycisk_wiek" value="Ok">';
      if(isset($_POST["przycisk_wiek"])){
        $ilosc = $_POST["ilosc"];
        echo $ilosc;
        $tab = array();
        for($i=0;$i<$ilosc;$i++) $tab[$i] = $_POST["$i"];
        echo "<br>";
        for($i=0;$i<$ilosc;$i++) echo $tab[$i]."<br>";

      }

     ?>

  </body>
</html>
