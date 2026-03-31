
<?php
function fatorial($n) {
    $fat = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fat *= $i;
    }
    return $fat;
}

$soma = 0;

$soma += fatorial($_POST["n1"]);
$soma += fatorial($_POST["n2"]);
$soma += fatorial($_POST["n3"]);
$soma += fatorial($_POST["n4"]);
$soma += fatorial($_POST["n5"]);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <p><strong>Sua resposta é:</strong> <?php echo $soma;?> </p>
    <a href="index.php">Voltar</a>
</body>
</html>