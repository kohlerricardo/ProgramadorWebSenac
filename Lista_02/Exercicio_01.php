<?php

// Exercício 1: Soma Total

// Crie um array numérico com 5 números inteiros. Percorra o array e calcule a soma de todos os seus elementos. Ao final, exiba o resultado.

//     Opção: Solicite ao usuário que informe os valores do array.

$numeros = [1,2,3,4,5];
$soma=0;
for($i=0;$i<5;$i++)
{
    $soma = $soma+$numeros[$i];
}

echo "O valor da soma dos número do vetor com for é $soma\n";
echo "O valor da soma dos número do vetor com array_sum é ".array_sum($numeros)."\n";