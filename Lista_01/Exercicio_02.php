<?php

//Exercício 2: Área do Retângulo
//Desenvolva um programa que calcule a área de
// um retângulo pedindo base e altura ao usuário.

$base = readline("Informe a base do retângulo:");
$altura = readline("Informe a altura do retângulo");

$area = $base*$altura;
$perimetro = $base+$altura+$base+$altura;
echo "A área do retângulo é $area \n";
echo "O perímetro do retângulo é $perimetro";
