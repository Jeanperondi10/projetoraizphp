<?php
/* 
Leia dois valores inteiros, no caso, as variáveis A e B. Depois disso, calcule a soma entre eles e atribua à variável SOMA. Escreva o valor dessa variável.
Entrada

O arquivo de entrada contém 2 números inteiros.
Saída

Imprima a mensagem "SOMA" com todas as letras maiúsculas, com um espaço em branco antes e depois do sinal de igual seguido do valor correspondente à soma de A e B. Como todos os problemas, não esqueça de imprimir o final da linha , caso contrário, você receberá "Erro de apresentação"
*/
    
$A = readline("Digite varA: ");
$B = readline("Digite varb: ");
$PROD = $A+$B;
echo("PROD = ".$PROD ."\n");