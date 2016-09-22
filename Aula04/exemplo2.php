<?php

#Declarando a função calcula_obesidade

function calcula_obesidade($peso, $altura){
	
	return $peso / ($altura * $altura);
}

echo calcula_obesidade(80,1.85);

?>