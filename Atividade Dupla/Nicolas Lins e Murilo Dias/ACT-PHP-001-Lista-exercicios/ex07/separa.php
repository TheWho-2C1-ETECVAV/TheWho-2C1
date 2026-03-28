<?php

$numeros = $_POST["num"];

$positivos = [];
$negativos = [];

foreach ($numeros as $n) {

    if ($n >= 0) {
        $positivos[] = $n;
    } else {
        $negativos[] = $n;
    }

}

echo "Números positivos:<br>";
foreach ($positivos as $p) {
    echo $p . " ";
}

echo "<br><br>";

echo "Números negativos:<br>";
foreach ($negativos as $n) {
    echo $n . " ";
}

?>