<?php

$salario = $_POST['salario'];
$vendas = $_POST['vendas'];

$total = ((4 * $vendas) / 100) + $salario;

echo "Ola vendedor. Seu salario esse mes eh de R$ $total";


?>