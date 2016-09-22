<?php

$total = 0;

function km2ml($quilometros){
    global $total;
    $total += $quilometros;
    return $quilometros * 0.6;
}

echo "Percorreu " . km2ml(100) . " milhas. <br>";
echo "Percorreu mais " . km2ml(200) . " milhas. <br>";
echo "Percurso no total de $total quilometros.";

?>