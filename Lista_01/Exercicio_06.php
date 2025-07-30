<?php
// Exercício 6: Calculadora de IMC
// Desenvolva um programa que calcule o Índice de Massa Corporal. 
// Fórmula: IMC = peso / altura²

$peso =  readline("Informe o peso da pessoa: ");
$altura = readline("Informe a altura da pessoa em metros: ");

$IMC = $peso / ($altura*$altura);

echo "O IMC do usuário é $IMC";