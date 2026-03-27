<!--
Data: 20/03/2026
Autor: Murilo Dias da Silva e Nickolas Lins de Lemos
Objetivo:

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.

-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>

<h2>Calculadora Simples</h2>

<form action="calcular.php" method="GET">
    Número 1: 
    <input type="number" name="num1" step="any" required>
    <br><br>

    Operador:
    <select name="operador" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br><br>

    Número 2:
    <input type="number" name="num2" step="any" required>
    <br><br>

    <button type="submit">Calcular</button>
</form>

</body>
</html>