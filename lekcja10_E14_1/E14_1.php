<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>
    <ul>
    <?php
      $connect = new mysqli('localhost', 'root', '', 'sklep');
      $sql = "SELECT nazwa FROM towary WHERE promocja = 1";
      $result = mysqli_query($connect, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo "<li>".$row["nazwa"]."</li>";
      }
     ?>
   </ul>
  </body>
</html>
