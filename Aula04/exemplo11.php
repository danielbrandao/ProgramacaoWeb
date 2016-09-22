<?php

	$arquivo = fopen("arquivos/arquivo.txt", "r");

	// Enquanto o fim do arquivo não for atingido
	while(!feof($arquivo))
	{
		// Lê uma linha do arquivo
		$linha = fgets($arquivo);

		echo $linha . "<br>";
	}
		
	fclose($arquivo);
?>
