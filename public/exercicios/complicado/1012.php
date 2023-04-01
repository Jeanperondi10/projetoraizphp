<?php
/* 
Faça um programa que leia três valores de ponto flutuante: A, B e C. Em seguida, calcule e mostre:
a) a área do triângulo retângulo que tem base A e altura C.
b) a área do círculo do raio C. (pi = 3,14159)
c) a área do trapézio que tem A e B por base, e C por altura.
d) a área do quadrado que tem lado B.
e) a área do retângulo que tem os lados A e B.
Entrada

O arquivo de entrada contém três valores duplos com um dígito após o ponto decimal.
Saída

O arquivo de saída deve conter 5 linhas de dados. Cada linha corresponde a uma das áreas descritas acima, sempre com uma mensagem correspondente (em português) e um espaço entre os dois pontos e o valor. O valor calculado deve ser apresentado com 3 dígitos após a vírgula.*/
    
$V = explode(" ",readline("Digite tres valores: "));
$A=$V[0];
$B=$V[1];
$C=$V[2];

$area=array();

$area["TRIANGULO"]=number_format(($A*$C)/2 , 3 , '.' , '');
$area["CIRCULO"]=number_format(3.14159 * pow($C,2) ,3,'.', '');
$area["TRAPEZIO"]=number_format((($A + $B)/2) * $C, 3,'.', '');
$area["QUADRADO"]=number_format(pow($B,2),3,'.', '');
$area["RETANGULO"]=number_format(($A*$B),3,'.', '');


foreach ($area as $key => $value) {
    echo ("$key: $value\n");
}