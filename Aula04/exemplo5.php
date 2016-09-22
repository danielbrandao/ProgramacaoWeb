<?php

$total = 0;

function percorre($quilometros){
    static $total;
    $total += $quilometros;
    echo "Percorreu mais $quilometros do total de $total. <br>";
}

percorre(100);
percorre(200);
percorre(30);

?>