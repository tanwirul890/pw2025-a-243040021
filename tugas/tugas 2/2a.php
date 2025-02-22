<?php
// Definisikan variabel untuk nama depan dan belakang
$first_name = "tanwirul ";
$last_name = "fuadhilan";

// Loop dari 1 ke 100 secara menurun
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$first_name $last_name <br>";
    } elseif ($i % 3 == 0) {
        echo "$first_name  <br>";
    } elseif ($i % 5 == 0) {
        echo "$last_name <br>";
    } else {
        echo "$i\n <br>";
    }
} ?>
