<?php

function calcula_media($p1, $p2, $n1,$n2){
    return $media =  ($p1 * $n1 + $p2*$n2)/($p1+$p2);
}
echo calcula_media(4,6,10,8);

?>
