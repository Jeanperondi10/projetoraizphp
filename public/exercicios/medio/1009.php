<?php
    /*
Faça um programa que leia o nome do vendedor, seu salário fixo e o total da venda feita por ele no mês (em dinheiro). Considerando que este vendedor recebe 15% sobre todos os produtos vendidos, escreva o salário final (total) deste vendedor no final do mês, com duas casas decimais.

- Não se esqueça de imprimir o final da linha após o resultado, caso contrário receberá “Erro de apresentação”.

- Não se esqueça dos espaços em branco.
Entrada

O arquivo de entrada contém um texto (primeiro nome do funcionário) e dois valores de dupla precisão, que são o salário do vendedor e o valor total vendido por ele.
Saída

Imprima o salário total do vendedor, conforme o exemplo dado.
  */    

    $nome = readline("Digite o nome do funcionário: ");
    $sal = readline("Quanto é o salario: ");
    $val = readline("Quanto vendeu: ");
    $comissao = number_format($sal+($val*0.15),2,".","");
    echo("TOTAL = R$ ".$comissao."\n");