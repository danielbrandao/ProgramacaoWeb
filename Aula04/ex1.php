<?php

$nome       = $_POST['nome'];
$disciplina = $_POST['disciplina'];
$n1         = $_POST['n1'];
$n2         = $_POST['n2'];
$n3         = $_POST['n3'];
$n4         = $_POST['n4'];

function calcula_media($n1, $n2, $n3,$n4){
    return $media =  ($n1 + $n2 + $n3 + $n4)/4;
   // return $media;
}

echo "Ola $nome, na disciplina $disciplina voce teve media ";
echo calcula_media($n1, $n2, $n3, $n4);

?>
