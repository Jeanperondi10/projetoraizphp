<?php
/* 
Leia 2 variáveis, denominadas A e B e faça a soma dessas duas variáveis, atribuindo seu resultado à variável X. Imprima X como mostrado abaixo. Imprima a linha final após o resultado, caso contrário, você obterá “Erro de apresentação”.
Entrada

O arquivo de entrada conterá 2 números inteiros.
Saída

Imprima a letra X (maiúscula) com um espaço em branco antes e depois do sinal de igual seguido do valor de X, conforme exemplo a seguir.

Obs.: afinal não se esqueça da linha final.
*/
    
$A = readline("Digite varA: ");
$B = readline("Digite varb: ");
$X = $A+$B;
echo("X = ".$X);