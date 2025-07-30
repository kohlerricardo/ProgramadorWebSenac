<?php

// Exercício 5: Cálculo de Juros Simples
// Crie um programa que calcule juros simples. Fórmula: J = C × i × t

$capital = readline("Informe o capital investido: ");
$taxa = readline("Informe a taxa de juros mensal: ");
$tempo = readline("Informe o tempo de investimento: ");

$juros = $capital*($taxa/100)*$tempo;

echo "O Juro sobre o capital de $capital, a uma taxa de $taxa durante $tempo meses é $juros";