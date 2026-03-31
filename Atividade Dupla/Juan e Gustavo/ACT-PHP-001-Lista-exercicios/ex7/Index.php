<!DOCTYPE html>
<html lang="pt-br">
    <!--
Data: 30/03/2026
Autor: Juan Conceição de Souza e Gustavo Assis Calligaris
Objetivo:

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos

-->
<head>
    <meta charset="UTF-8">
    <title>Separar Números</title>
</head>
<body>

<h1>Separar Positivos e Negativos</h1>

<form action="calcula.php" method="post">
<?php
for ($i = 0; $i < 8; $i++) {
    echo "Número " . ($i+1) . ": <input type='number' name='nums[]' required><br>";
}
?>
<br>
<input type="submit" value="Enviar">
</form>

</body>
</html>
calcula.php