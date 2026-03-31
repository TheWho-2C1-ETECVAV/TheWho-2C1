<!DOCTYPE html>
<html lang="pt-br">
<!--
Data: 30/03/2026
Autor: Juan Conceição de Souza e Gustavo Assis Calligaris
Objetivo:

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)

Que receba uma lista de números reais e retorne a média aritmética.

-->
<head>
    <meta charset="UTF-8">
    <title>Média</title>
</head>
<body>

<h1>Média Aritmética</h1>

<form action="calcula.php" method="post">
<?php
for ($i = 0; $i < 5; $i++) {
    echo "Número " . ($i+1) . ": <input type='number' step='any' name='valores[]' required><br>";
}
?>
<br>
<input type="submit" value="Calcular">
</form>

</body>
</html>