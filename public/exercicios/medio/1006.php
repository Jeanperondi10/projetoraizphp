<?php
    /*
    Leia três valores (variáveis A, B e C), que são as três notas do aluno. Em seguida, calcule a média, considerando que a nota A tem peso 2, a nota B tem peso 3 e a nota C tem peso 5. Considere que cada nota pode ir de 0 a 10,0, sempre com uma casa decimal.
Entrada

O arquivo de entrada contém 3 valores de ponto flutuante (duplo) com um dígito após o ponto decimal.
Saída

Imprima a mensagem "MEDIA" (média em português) e a média do aluno conforme exemplo a seguir, com um espaço em branco antes e depois do sinal de igual. 
    */    
    $N1 = readline("Digite Nota 1: ");
    $N2 = readline("Digite Nota 2: ");
    $N3 = readline("Digite Nota 3: ");
    $MEDIA = number_format(((2*$N1)+(3*$N2)+(5*$N3))/10,1,".","");
    echo("MEDIA = ".$MEDIA ."\n");