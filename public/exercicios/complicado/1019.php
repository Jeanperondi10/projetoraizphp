<?php
/* 
Lê um valor inteiro, que é a duração em segundos de um determinado evento em uma fábrica, e informa-o expresso em horas:minutos:segundos.
Entrada

O arquivo de entrada contém um inteiro N.
Saída

Imprima o tempo de leitura no arquivo de entrada (segundos) convertido em horas:minutos:segundos como no exemplo a seguir.
*/

function calqntnot($valor,$seg){
    return floor($valor/$seg);
}
function valorcalc($qntemp,$seg){
    return $qntemp*$seg;
}

$valor = readline("Digite os segundos: ");
$segundos=array(3600, 60, 1);
foreach ($segundos as $key => $segundo) {
    $qntemp=calqntnot($valor,$segundo);
    $valor-=valorcalc($qntemp, $segundo);
    $txt="$qntemp:";
    if($key==count($segundos)-1){
        $txt=substr($txt, 0, -1)."\n";
    }
    echo($txt);
}