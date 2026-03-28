<?php

function media($v){
    $soma = 0;
    $quantidade = count($v);

    foreach($v as $numero){
        $soma += $numero;
    }

    return $soma / $quantidade;
}

$entrada = $_POST["valores"];

$valores = explode(" ", $entrada);

$resultado = media($valores);

echo "A média é: " . $resultado;

?>