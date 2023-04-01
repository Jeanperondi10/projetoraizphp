<?php
/* 
Neste problema você deve ler um valor inteiro e calcular o menor número possível de notas em que o valor pode ser decomposto. As notas possíveis são 100, 50, 20, 10, 5, 2 e 1. Imprima o valor lido e a lista de notas.
Entrada

O arquivo de entrada contém um valor inteiro N (0 < N < 1000000).
Saída

Imprima o número lido e a quantidade mínima de cada cédula necessária em língua portuguesa, conforme exemplo dado. Não se esqueça de imprimir o final da linha após cada linha, caso contrário, você receberá “Erro de apresentação”.
*/

function calqntnot($valor,$nota){
    return floor($valor/$nota);
}
function valorcalc($qntnota,$nota){
    return $qntnota*$nota;
}

$valor = readline("Digite o valor: ");

echo("$valor\n");
$notas=array(100, 50, 20, 10, 5, 2, 1);
foreach ($notas as $nota) {
    $qntnota=calqntnot($valor,$nota);
    $valor-=valorcalc($qntnota, $nota);
    echo("$qntnota nota(s) de R$ $nota,00\n");
}

