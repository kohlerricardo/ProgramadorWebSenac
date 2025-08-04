<?php
// Calcule a média de uma turma de 5 alunos. Cada aluno possui 3 notas 
// Solicite que o usuário informe as notas
// Calcule a média e exiba as notas de cada aluno



$notas = array();

for($i = 0;$i<2;$i+=1)
{
    $aluno = readline("Informe o nome do aluno:");
    $notas[$aluno] = array();
    for($n = 0; $n < 3; $n+=1)
    {
        $notas[$aluno][$n] = readline("Informe a $n ª nota do aluno:");
    }
    $notas[$aluno][$n] = ($notas[$aluno][0]+$notas[$aluno][1]+$notas[$aluno][2])/3;
}

foreach($notas as $chave => $valor){
    echo "O Aluno $chave tem média de $valor[3]\n";
}

