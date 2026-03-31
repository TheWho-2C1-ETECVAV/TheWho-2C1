<?php
function media($v) {
    return array_sum($v) / count($v);
}

$valores = $_POST["valores"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<h1>Resultado</h1>

<p>Média: <?php echo media($valores); ?></p>

<a href="Index.php">Voltar</a>

</body>
</html>