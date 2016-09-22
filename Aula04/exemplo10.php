<?php

$arquivo = "arquivos/testes.txt";

if(file_exists($arquivo))
	echo "Arquivo existente";
else
    echo "Arquivo não existente";

?>
