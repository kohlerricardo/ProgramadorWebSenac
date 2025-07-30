<?php

// Exercício 7: Conversor de Minutos
// Crie um programa que converta minutos em horas e minutos restantes.

$minutos_totais = readline("Informe um número de minutos");
$horas = intval($minutos_totais / 60);
$minutos = $minutos_totais % 60; 

echo "$minutos_totais minutos equivalem a $horas hora(s) e $minutos minuto(s)";