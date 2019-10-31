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
    <body>
        <?php
        echo "<table>";
        $row = 1;
        $col = 1;
        do {
            echo "<tr>";
            do {
                echo "<td>".$row * $col."</td>";
                $col++;
            }while ($col <= 10);
            echo "</tr>";
            $col = 1;
            $row++;
        }while($row<=10);
        echo "</table>";
         ?>
    </body>
</html>
