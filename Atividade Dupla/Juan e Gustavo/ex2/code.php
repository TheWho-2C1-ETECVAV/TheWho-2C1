
<?php 
$n1 = $_GET["n1"];
$f = 0;
$a = $_GET["a"];
$c = 0;

if ($a == 'F' or $a == 'f') {
    $c = (5/9) * ($n1 - 32);
    $f = $n1;
}
else if ($a == 'C' or $a == 'c' ) {
    $f = (9/5) * $n1 + 32;
    $c = $a;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <p><strong>Temperatura em Celsius:</strong><?php echo $c; ?> C</strong></p>
    <p><strong>Temperatura em Fahrenheit:</strong><?php echo $f; ?> F</strong></p>

    <a href="index.php">Voltar</a>
</body>
</html>
 switch ($op) {
    case "+":
        echo "Resultado: " . ($n1 + $n2);
        break;
    case "-":
        echo "Resultado: " . ($n1 - $n2);
        break;
    case "*":
        echo "Resultado: " . ($n1 * $n2);
        break;
    case "/":
        if ($n2 != 0) {
            echo "Resultado: " . ($n1 / $n2);
        } else {
            echo "Erro: divisão por zero!";
        }
        break;
    default:
        echo "Operador inválido!";
}


