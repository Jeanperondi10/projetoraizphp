<?php
/* 
Leia dois valores inteiros, no caso, as variáveis A e B. Depois disso, calcule a soma entre eles e atribua à variável SOMA. Escreva o valor dessa variável.
Entrada

O arquivo de entrada contém 2 números inteiros.
Saída

Imprima a mensagem "SOMA" com todas as letras maiúsculas, com um espaço em branco antes e depois do sinal de igual seguido do valor correspondente à soma de A e B. Como todos os problemas, não esqueça de imprimir o final da linha , caso contrário, você receberá "Erro de apresentação"
*/
    
$R = readline("Digite R: ");
$A = number_format(3.14159 * $R*$R,4,'.', '');
echo("A=".$A ."\n");