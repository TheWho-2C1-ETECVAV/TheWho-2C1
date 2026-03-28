<!--
Data: 20/03/2026
Autor: Murilo Dias da Silva e Nickolas Lins de Lemos
Objetivo:

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos
-->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Separar Números</title>
</head>
<body>

<h2>Digite 8 números inteiros</h2>

<form action="separar.php" method="post">

<?php
for ($i = 1; $i <= 8; $i++) {
    echo "Número $i: <input type='number' name='num[]' required><br><br>";
}
?>

<button type="submit">Enviar</button>

</form>

</body>
</html>