<!DOCTYPE html>
<html lang="pt-br">
    <!--
Data: 30/03/2026
Autor: Juan Conceição de Souza e Gustavo Assis Calligaris
Objetivo:

Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.

Um ano é bissexto se:

É múltiplo de 400
ou
É múltiplo de 4 e não é múltiplo de 100
-->
<head>
    <meta charset="UTF-8">
    <title>Ano Bissexto</title>
</head>
<body>

<h1>Verificar Ano Bissexto</h1>

<form action="calcula.php" method="get">
    <label>Digite o ano:</label>
    <input type="number" name="ano" required>
    <br><br>
    <input type="submit" value="Verificar">
</form>

</body>
</html>