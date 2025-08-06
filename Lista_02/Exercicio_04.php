<?php

// Exercício 4: O Maior da Turma
// Crie um array com números inteiros aleatórios. 
// Percorra o array para encontrar o maior número
//  dentro e exiba-o.

$aleatorios = array();
//Preenchendo array com número aleatórios
for($i=0;$i<10;$i++){
    $aleatorios[$i] = rand(10,20);
}
$maior = 0;
foreach($aleatorios as $numero){
    if($numero > $maior){
        $maior = $numero;
    }
}
echo "O número $maior é o maior número do array ";
print_r($aleatorios);


