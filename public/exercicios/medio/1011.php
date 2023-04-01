<?php
/* 
Faça um programa que calcule e mostre o volume de uma esfera fornecendo o valor de seu raio (R). A fórmula para calcular o volume é: (4/3) * pi * R3. Considere (atribua) para pi o valor 3,14159.

Dica: Use (4/3.0) ou (4.0/3) em sua fórmula, porque algumas linguagens (incluindo C++) assumem que o resultado da divisão entre dois inteiros é outro inteiro. :)
Entrada

A entrada contém um valor de ponto flutuante (precisão dupla).
Saída

A saída deve ser uma mensagem "VOLUME" como no exemplo a seguir com um espaço antes e depois do sinal igual. O valor deve ser apresentado com 3 dígitos após a vírgula.
*/
    
$R = readline("Digite R: ");
$VOLUME = number_format((4/3) * 3.14159 * pow($R,3),3,'.', '');
echo("VOLUME = $VOLUME\n");