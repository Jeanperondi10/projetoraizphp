<?php
    /*
    Escreva um programa que leia o número de um funcionário, seu número de horas trabalhadas em um mês e o valor que ele recebe por hora. Imprima o número do funcionário e o salário que ele receberá no final do mês, com duas casas decimais.

     Não se esqueça de imprimir o final da linha após o resultado, caso contrário você receberá “Erro de apresentação”.
     Não se esqueça do espaço antes e depois do sinal de igual e depois do U$.

    Entrada

    O arquivo de entrada contém 2 números inteiros e 1 valor de ponto flutuante, representando o número, o valor das horas trabalhadas e o valor que o funcionário recebe por hora trabalhada.
    Saída

    Imprima o número e o salário do funcionário, conforme exemplo dado, com um espaço em branco antes e depois do sinal de igual.
    */    
    $num = readline("Digite o numero do funcionário: ");
    $qnt = readline("Quantas horas trabalhadas: ");
    $val = readline("Qual o preço por hora: ");
    $sal = number_format($qnt*$val,2,".","");
    echo("NUMBER = ".$num ."\nSALARY = U$ ".$sal."\n");