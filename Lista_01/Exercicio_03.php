<?php

//Exercício 3: Conversor de Temperatura
//Crie um programa que converta temperatura de Celsius para Fahrenheit.
 //Fórmula: F = (C × 9/5) + 32 /F = (C*1.8)+32

 $celsius = readline("Informe uma temperatura em  graus celsius: ");
 $fahrenheit = ($celsius * 9/5)+32;
echo "A temperatura $celsius é igual a $fahrenheit graus Fahrenheit";