<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style media="screen">
        tr{
            border: solid black 1px;
        }
        td{
            border: solid black 1px;
        }
        .color{
                background-color: red;
            }
        </style>
    </head>
    <body>
      <form class="" action="tabliczka4.php" method="post">
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
        $sum_pierwsza = 0;
        $sum_druga = 0;
        do {
            echo "<tr>";
            do {
                if ($row==$col){ echo "<td class='color'>".$row * $col."</td>";
                $sum_pierwsza = $sum_pierwsza + ($row*$col);
                }
                elseif($row+$col==$rozmiar+1){
                echo "<td class='color'>".$row * $col."</td>";
                $sum_druga = $sum_druga + ($row*$col);
                }
                else echo "<td>".$row * $col."</td>";
                $col++;
            }while ($col <= $rozmiar);
            echo "</tr>";
            $col = 1;
            $row++;
        }while($row <= $rozmiar);
        echo "</table>";
        echo "Suma na pierwszej przekątnej wynosi $sum_pierwsza<br>";
        echo "Suma na drugiej przekątnej wynosi $sum_druga";
      }
         ?>
    </body>
</html>
