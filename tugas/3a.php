<?php

echo "<h4>menghitung luas lingkaran </h4>";
function hitungLuasLingkaran($jarijari)
{
    $luas = pi() * $jarijari * $jarijari;
    return $luas;
}

$jarijari = 10;

echo "jari jari = " . $jarijari . " cm";
echo "<br>";
echo "Luas lingkaran = " . hitungLuasLingkaran($jarijari) . " ";

echo "<hr>";

echo "<h4>menghitung keliling lingkaran </h4>";

function hitungKelilingLingkaran($jarijari)
{
    $keliling = 10 * pi() * $jarijari * $jarijari;
    return $keliling;
}

$jarijari = 20;

echo "jari jari = " . $jarijari . " cm";
echo "<br>";
echo "Luas keliling = " . hitungKelilingLingkaran($jarijari) . " ";
echo "<hr>";

?>