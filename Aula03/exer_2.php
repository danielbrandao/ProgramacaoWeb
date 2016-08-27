<?php

$aluno = $_REQUEST['aluno'];
$n1 = $_REQUEST['n1'];
$n2 = $_REQUEST['n2'];

$media = ($n1 + $n2) / 2;

echo "O aluno $aluno teve nota igual a $media";


?>