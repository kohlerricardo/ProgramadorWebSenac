<?php
// Calcule a média de uma turma de 5 alunos. Cada aluno possui 3 notas 
// Solicite que o usuário informe as notas
// Calcule a média e exiba as notas de cada aluno

$notas = array();
$notas[0] = readline("Informe o nome do aluno:");
$notas[1] = readline("Informe a 1ª nota do aluno:");
$notas[2] = readline("Informe a 2ª nota do aluno:");
$notas[3] = readline("Informe a 3ª nota do aluno:");
$notas[4] = ($notas[1]+$notas[2]+$notas[3])/3;

echo "O aluno $notas[0] possui média $notas[4]";