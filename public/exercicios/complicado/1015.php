<?php
/*
Leia os quatro valores correspondentes aos eixos x e y de dois pontos do plano, p1 (x1, y1) e p2 (x2, y2) e calcule a distância entre eles, mostrando quatro casas decimais após a vírgula, conforme a fórmula :

Distância =
Entrada

O arquivo de entrada contém duas linhas de dados. O primeiro contém dois valores duplos: x1 y1 e o segundo também contém dois valores duplos com um dígito após a vírgula: x2 y2.
Saída

Calcule e imprima o valor da distância usando a fórmula fornecida, com 4 dígitos após o ponto decimal. 
*/    
$ponto1 = explode(" ",readline("Digite cordenadas ponto X: "));
$ponto2 = explode(" ",readline("Digite cordenadas ponto Y: "));
$x1=$ponto1[0];
$y1=$ponto1[1];
$x2=$ponto2[0];
$y2=$ponto2[1];

$dist=number_format(sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2)),4,'.', '');

echo ("$dist\n");