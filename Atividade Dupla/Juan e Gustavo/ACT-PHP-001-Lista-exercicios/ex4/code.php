
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

   <?php
$n = $_GET["n"];

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>
<br>
    <a href="index.php">Voltar</a>

</body>
</html>
