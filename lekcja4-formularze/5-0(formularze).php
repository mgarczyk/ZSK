<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="formularze.php" method="post">
      <input type="text" name="name" value="" placeholder="Podaj imie">
      <br/>
      <br/>
      <input type="number" name="age" value="" placeholder="Podaj wiek">
      <br/>
      <br/>
      <input type="submit" name="button" value="Potwierdź">
      <hr/>
    </form>
    <?php
        if (!empty($_POST["name"]) && !empty($_POST["age"])){ //jezeli te pola nie są puste !empty
          $name = ($_POST["name"]);
          $age = $_POST["age"];
          //z1 Zabezpiecz formularz przed podaniem białych znaków ogranicz ilość znaków dla 10 dla imienia.
          //Pierwsza litera imienia ma byc duza a poszostale małe. Wyświetl dane w formacie
          //Przed poprawa...
          //Po zmaiania
          $nameNew = substr(ucfirst(strtolower(trim($name))),0,10);
          echo<<<TABLE
          <table>
            <tr>
              <td>Opis</td>
              <td>Imie</td>
              <td>Wiek</td>

            </tr>
            <tr>
              <td>Przed poprawą</td>
              <td>$name</td>
              <td>$age</td>
            </tr>
            <tr>
              <td>Po poprwie</td>
              <td>$nameNew</td>
              <td>$age</td>
            </tr>
          </table>
TABLE;
        }
     ?>



      </body>
    </html>
