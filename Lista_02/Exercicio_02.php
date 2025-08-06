<?php

// Exercício 2: Média de Notas
// Crie um array contendo 4 notas de um aluno 
// (ex: [7.5, 8.0, 6.5, 9.0]). Depois, utilizando um 
// laço de repetição, calcule a média dessas notas e 
// exiba o resultado.
// Opção: Solicite ao usuário que informe os valores do array.

$notas=array();
for($i = 0; $i<4;$i++){
    $notas[$i] = readline("Informe a nota: ");
}
$frequencia = readline("Informe a frequência do aluno: ");
$media=0;
foreach($notas as $nota){
    $media+=$nota;//somar as notas
}
$media = $media/4; //calcular a média

if(($media>=6) && ($frequencia >75)){
    echo "A média do aluno é $media e ele está aprovado\n";
}else if ($media >=2){
    echo "A média do aluno é $media e ele está em exame\n";
}
else{
    echo "A média do aluno é $media e ele está reprovado\n";
}
