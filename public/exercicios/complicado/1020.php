<?php
/* 
Lê um valor inteiro correspondente à idade de uma pessoa (em dias) e imprime-o em anos, meses e dias, seguido da respectiva mensagem “ano(s)”, “mes(es)”, “dia(s)”.

Obs: só para facilitar o cálculo, considere o ano todo com 365 dias e 30 dias todos os meses. Nos casos de teste nunca haverá uma situação que permita 12 meses e alguns dias, como 360, 363 ou 364. Este é apenas um exercício com o objetivo de testar raciocínio matemático simples.
Entrada

O arquivo de entrada contém 1 valor inteiro.
Saída

Imprima a saída, como no exemplo a seguir.
*/

function calqnt($valor,$dia){
    return floor($valor/$dia);
}
function valorcalc($qntemp,$dia){
    return $qntemp*$dia;
}

$valor = readline("Digite os dias: ");
$dias=array(365, 30, 1);
$nametemp=array("ano(s)","mes(es)","dia(s)");
foreach ($dias as $key => $dia) {
    $qntemp=calqnt($valor,$dia);
    $valor-=valorcalc($qntemp, $dia);
    echo("$qntemp ".$nametemp[$key]."\n");
}