<?php
/* 
Faça um programa que leia 3 valores inteiros e apresente o maior seguido da mensagem "eh o maior". Use a seguinte fórmula:

Entrada

O arquivo de entrada contém 3 valores inteiros.
Saída

Imprima o maior desses três valores seguido de um espaço e a mensagem “eh o maior”.*/
    
$V = explode(" ",readline("Digite tres valores: "));
$A=$V[0];
$B=$V[1];
$C=$V[2];
$MAIORVALOR=($A+$B+abs($A-$B))/2;
$MAIORVALOR=($MAIORVALOR+$C+abs($MAIORVALOR-$C))/2;
echo("$MAIORVALOR eh o maior\n");