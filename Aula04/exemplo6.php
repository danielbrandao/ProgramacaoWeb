<?php

$arquivo = fopen("arquivos/arquivo.txt", "r");

if($arquivo)
	echo "O script abriu o arquivo <br>";
else
	echo "Erro ao abrir o arquivo!";

?>
