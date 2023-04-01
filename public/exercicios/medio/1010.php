<?php
    /*Neste problema, a tarefa é ler o código do produto 1, o número de unidades do produto 1, o preço de uma unidade do produto 1, o código do produto 2, o número de unidades do produto 2 e o preço para uma unidade do produto 2. Depois disso, calcule e mostre o valor a ser pago.
Entrada

O arquivo de entrada contém duas linhas de dados. Em cada linha haverá 3 valores: dois inteiros e um valor flutuante com 2 dígitos após a vírgula.
Saída

O arquivo de saída deve ser uma mensagem como o exemplo a seguir onde "Valor a pagar" significa Valor a Pagar. Lembre-se do espaço após o ":" e após o símbolo "R$". O valor deve ser apresentado com 2 dígitos após o ponto.
  */    

    $prod1 = explode(" ",readline("Digite Valores produto 1 "));
    $prod2 = explode(" ",readline("Digite Valores produto 2 "));

    $vartotal= number_format(($prod1[1]*$prod1[2])+($prod2[1]*$prod2[2]),2,".","");
    echo("VALOR A PAGAR: R$ ".$vartotal."\n");