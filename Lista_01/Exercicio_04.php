<?php
// Exercício 4: Cálculo de Média
// Desenvolva um programa que calcule a média 
// aritmética de 3 notas inseridas pelo usuário.

$nota1 = readline("Informe a primeira nota: ");
$nota2 = readline("Informe a segunda nota: ");
$nota3 = readline("Informe a terceira nota: ");

$media_aritmetica = ($nota1 + $nota2 + $nota3) / 3;

echo "A média é:$media_aritmetica";