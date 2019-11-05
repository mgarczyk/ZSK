<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
        tr{
            border: solid black 1px;
        }
        td{
            border: solid black 1px;
        }
        </style>
    </head>
    <form class="" action="tabliczka1.php" method="post">
     <input type="number" name="rozmiar" value="" placeholder="Podaj rozmiar tabliczki">
     <input type="submit" name="przycisk" value="Ok">
    </form>
    <body>
        <?php
        if (isset($_POST["przycisk"])){
        $rozmiar = $_POST["rozmiar"];
        echo "<br>";
        echo "<table>";
        $row = 1;
        $col = 1;
        do {
            echo "<tr>";
            do {
                echo "<td>".$row * $col."</td>";
                $col++;
            }while ($col<=$rozmiar);
            echo "</tr>";
            $col = 1;
            $row++;
        }while($row<=$rozmiar);
        echo "</table>";
      }
         ?>
    </body>
</html>
