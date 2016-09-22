<?php

$fp = fopen("arquivos/arquivo.txt", "w");

fwrite ($fp, "Linha 1\n"); 
fwrite ($fp, "Linha 2\n");
fwrite ($fp, "Linha 3\n");

$arquivo = file("arquivos/arquivo.txt");

echo $arquivo[0];
echo $arquivo[1];
echo $arquivo[2];

?>