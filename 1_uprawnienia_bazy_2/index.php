<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bazy - uprawnienia</title>
  </head>
  <body>
    <?php
      if(isset($_SESSION["message"])){
        echo "<h3 class='red'>".$_SESSION["message"]."</h3>";
        unset($_SESSION["message"]);
      }

      require_once("./connect.php");

      //$sql = "select * from user";
      $sql = "select id, name, surname, birthday from user";

      if ($result = mysqli_query($conn, $sql)) {
        //echo "prawidłowe zapytanie";
      echo "<h3>WYŚWIETLANIE DANYCH I USUWANIE UŹYTKOWNIKA</h3>";
      echo <<<TABLE
      <table>
        <tr>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th>Rok urodzenia</th>
          <th>Usuń użytkownika</th>
        </tr>
TABLE;

      while ($row = mysqli_fetch_assoc($result)) {   //w tabelce przekaujemy id za pomocą metody get
        $year = substr($row['birthday'],0,4);
        echo <<<ROW
        <tr>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[birthday]</td>
          <td>$year</td>
          <td><a href="./scripts/delete_user.php?id=$row[id]">Usuń</a></td>
          <td><a href="index.php?updateId=$row[id]">Aktualizuj</a></td>
        </tr>
ROW;
      }
      echo "</table>";
      echo "<h3>DODAJ UŹYTKOWNIKA</h3>";
      echo <<< ADDUSER
      <form class="" action = "scripts/add_user.php" method="post"><br>
        <input type="text" name="name" value=""><br><br>
        <input type="text" name="surname" value=""><br><br>
        <input type="date" name="birthday" value=""><br><br>
        <input type="submit" name="button" value="Add user"><br>
      </form>
ADDUSER;

      if(isset($_GET["updateId"])){
        $id = $_GET["updateId"];
        $query  = "SELECT * FROM user WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $name = $row["name"];
        $surname = $row["surname"];
        $birthday = $row["birthday"];
        echo <<< FORMUPDATEUSER
        <h3>UAKTUALNIANIE UŹYTKOWNIKA</h3>
        <form class="" action = "scripts/update_user.php" method="post"><br>
          <input type="text" name="name" value="" placeholder="$name"><br><br>
          <input type="text" name="surname" value=""  placeholder="$surname"><br><br>
          <input type="date" name="birthday" value=""  placeholder="$birthday"><br><br>
          <input type="hidden" name="id" value="$id">
          <input type="submit" name="button" value="Update user"><br>
        </form>
FORMUPDATEUSER;
      }

    }else {
          echo "błędne zapytanie";
          }

  mysqli_close($conn);
     ?>
  </body>
</html>
