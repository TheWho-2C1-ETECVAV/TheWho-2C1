<?php
$positivos = [];
$negativos = [];


if (isset($_POST["nums"])) {
    $nums = $_POST["nums"];

    foreach ($nums as $n) {
        if ($n >= 0) {
            $positivos[] = $n;
        } else {
            $negativos[] = $n;
        }
    }
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

<p><strong>Positivos:</strong>
<?php
if (!empty($positivos)) {
    echo implode(" ", $positivos);
} else {
    echo "Nenhum";
}
?>
</p>

<p><strong>Negativos:</strong>
<?php
if (!empty($negativos)) {
    echo implode(" ", $negativos);
} else {
    echo "Nenhum";
}
?>
</p>

<a href="Index.php">Voltar</a>
