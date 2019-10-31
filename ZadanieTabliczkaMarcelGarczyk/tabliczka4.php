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
        <?php
        echo "<table>";
        $row = 1;
        $col = 1;
        $sum = 0;
        $i = 1;
        echo "<tr><th></th>";
        do{
            echo "<th>$i</th>";
            $i++;
        }while($i<=10);
        echo "</tr>";
        do {
            echo "<tr>";
            echo "<th>".$row."</th>";
            do {
                if($row+$col==11){
                echo "<td class='color'>".$row * $col."</td>";
                $sum = $sum + ($row*$col);
                }
                else echo "<td>".$row * $col."</td>";
                $col++;
            }while ($col <= 10);
            echo "</tr>";
            $col = 1;
            $row++;
        }while($row<=10);
        echo "</table>";
        echo "Suma na przekątnej wynosi $sum";
         ?>
    </body>
</html>
