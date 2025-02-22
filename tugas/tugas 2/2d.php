<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur PHP</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 50px;
            height: 50px;
            border: 1px solid black
        }
    </style>
</head>
<body>
    <table>
        <?php
        $baris = 5;
        $kolom = 5;

        for ($i = 0; $i < $baris; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $kolom; $j++) {
                $warna = ($i + $j) % 2 == 1 ? "white" : "black";
                echo "<td style='background-color: $warna;'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>