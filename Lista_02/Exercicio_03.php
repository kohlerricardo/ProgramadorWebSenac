<?php
// Exercício 3: Tabuada de Um Número
// Solicite que o usuário insira um número qualquer. Após isso, Calcule a tabuada deste número, de 1 até 10.
// Opção: Solicite ao usuário que informe o número dda tabuada, e o item final dela (Ex: tabuada do 3 e item final 15)

$numero = readline("Insira o número a ser calculada a tabuada");

for($i = 1;$i <=10; $i++){
    echo "$numero x $i = ".$numero*$i."\n";
}