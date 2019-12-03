<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" method="post">
      <select class="" name="towar">
        <option value="czekolada">Czekolada</option>
        <option value="grzeski">Grześki</option>
      </select>
      <input type="submit" name="przycisk" value="Ok">
    </form>
    <?php
    if(!empty($_POST["towar"])){
      $towar = $_POST["towar"];
      echo $towar."<br>";
      $connect = new mysqli('localhost', 'root', '', 'sklep');
      $sql = "SELECT cena FROM towary WHERE nazwa='$towar';";
      $result = mysqli_query($connect, $sql);
      $row = mysqli_fetch_assoc($result);
      echo round($row["cena"] * 0.85,2);
    }

     ?>
  </body>
</html>
