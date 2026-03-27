<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operador = $_GET['operador'];

$resultado = 0;

if ($operador == "+") {
    $resultado = $num1 + $num2;
}
else if ($operador == "-") {
    $resultado = $num1 - $num2;
}
else if ($operador == "*") {
    $resultado = $num1 * $num2;
}
else if ($operador == "/") {

    if ($num2 == 0) {
        echo "Erro: divisão por zero.";
        exit;
    }

    $resultado = $num1 / $num2;
}
else {
    echo "Operador inválido.";
    exit;
}

echo "Resultado: " . $resultado;

?>