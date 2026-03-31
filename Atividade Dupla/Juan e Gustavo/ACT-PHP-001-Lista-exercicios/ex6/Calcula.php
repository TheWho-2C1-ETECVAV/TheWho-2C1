<?php
$n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;

$v1 = 0;
$v2 = 1;
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
for($i = 1; $i <= $n1; $i++) {
    echo $v1 . " ";
    $v3 = $v1 + $v2;
    $v1 = $v2;
    $v2 = $v3;
}
?>
</p>

<a href="Index.php">Voltar</a>

</body>
</html>