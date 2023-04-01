<?php

$dinheiros=array();
$dinheiros["nota"]=array(100, 50, 20, 10, 5, 2);
$dinheiros["moeda"]=array(1, 0.5, 0.25, 0.1, 0.05, 0.01);

$valor = number_format(fgets(STDIN), 2, '.', '');

foreach($dinheiros as $nome => $dinheiro){
    echo(strtoupper($nome)."S:\n");
    foreach ($dinheiro as $din) {
        $qntdin=calqntnot($valor,$din);
        $valor=round($valor-valorcalc($qntdin, $din),2); // corrigido para usar a função round() para arredondar o valor
        $varprint=number_format($din, 2, '.', '');
        echo($qntdin." ".$nome."(s) de R$ ".$varprint."\n");
    }
}

function calqntnot($valor,$nota){
    return floor($valor/$nota);
}

function valorcalc($qntnota,$nota){
    return $qntnota*$nota;
}
