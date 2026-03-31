<?php
function soma($n) {
    $total = 0;
    for ($i = 0; $i <= $n; $i++) {
        $total += $i;
    }
    return $total;
}

$n = isset($_GET["n"]) ? $_GET["n"] : 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<h1>Resultado</h1>

<p>Resultado: <?php echo soma($n); ?></p>

<a href="Index.php">Voltar</a>

</body>
</html>