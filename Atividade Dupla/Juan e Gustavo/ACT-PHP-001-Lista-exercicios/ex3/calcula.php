<?php 
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$op = $_GET["op"];
$re = 0;

if ($op == "+") {

    $re = $n1 + $n2;

} elseif ($op == "-") {

    $re = $n1 - $n2;

} elseif ($op == "*") {

    $re = $n1 * $n2;

} elseif ($op == "/") {
    if ($n2 != 0) {

        $re = $n1 / $n2;

    } else {

        $re = "Erro: divisão por zero!";
    }
} else {
    
    $re = "Operador inválido!";
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
    <p><strong>Sua resposta é:</strong> <?php echo $re; ?></p>
    <a href="index.php">Voltar</a>
</body>
</html>