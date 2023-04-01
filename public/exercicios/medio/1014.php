<?php
/* 
Calcule o consumo médio de um automóvel tendo em conta a distância total percorrida (em Km) e o total de combustível gasto (em litros).
Entrada

O arquivo de entrada contém dois valores: um valor inteiro X representando a distância total (em Km) e o segundo é um número de ponto flutuante Y representando o total de combustível gasto, com um dígito após o ponto decimal.
Saída

Apresente um valor que represente o consumo médio de um carro com 3 dígitos após a vírgula, seguido da mensagem "km/l".*/
    
$km = readline("Digite a quantidade de quilometros: ");
$lt = readline("Digite a quantidade de litros");
$consumo = number_format($km/$lt,3,".","");
echo("$consumo km/l\n");