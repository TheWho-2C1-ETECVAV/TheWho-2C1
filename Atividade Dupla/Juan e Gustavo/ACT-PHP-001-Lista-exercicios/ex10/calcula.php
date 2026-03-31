<?php
$ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;

$bissexto = false;

if ($ano % 400 == 0) {
    $bissexto = true;
} elseif ($ano % 4 == 0 && $ano % 100 != 0) {
    $bissexto = true;
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

<p>
<?php
if ($bissexto) {
    echo "Ano bissexto";
} else {
    echo "Não é bissexto";
}
?>
</p>

<a href="Index.php">Voltar</a>

</body>
</html>