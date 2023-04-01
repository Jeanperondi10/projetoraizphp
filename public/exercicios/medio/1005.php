<?php
    /* 
 Leia os valores de dois pontos flutuantes de precisão dupla A e B, correspondentes às notas de dois alunos. Depois disso, calcule a média do aluno, considerando que a nota A tem peso 3,5 e a B tem peso 7,5. Cada nota pode ser de zero a dez, sempre com um dígito após a vírgula. Não se esqueça de imprimir o final da linha após o resultado, caso contrário você receberá “Erro de apresentação”. Não se esqueça do espaço antes e depois do sinal de igual.
Entrada

O arquivo de entrada contém valores de 2 pontos flutuantes com um dígito após o ponto decimal.
Saída

Imprima a mensagem "MEDIA" (média em português) e a média do aluno conforme exemplo a seguir, com 5 dígitos após a vírgula e com um espaço em branco antes e depois do sinal de igual.    */
        
    $N1 = readline("Digite Nota 1: ");
    $N2 = readline("Digite Nota 2: ");
    $MEDIA = number_format(((3.5*$N1)+(7.5*$N2))/11,5,".","");
    echo("MEDIA = ".$MEDIA ."\n");