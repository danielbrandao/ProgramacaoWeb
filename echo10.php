<?php

# Atribuindo e Verificando valor da variável

$nota1 = 7.5;
$nota2 = 6;
$nota3 = 8;
$nota4 = 3;

$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

if ($media >= 7){
    echo "Media igual a $media. Aluno APROVADO!";
}else{
    echo "Media igual a $media. Aluno REPROVADO.";
}

?>