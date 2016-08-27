<?php

$baseMaior = $_POST['baseMenor'];
$baseMenor = $_POST['baseMaior'];
$altura = $_POST['altura'];

$areaTrapezio = (($baseMenor + $baseMaior) * $altura)/2;

echo "A area do trapezio eh igual a $areaTrapezio";

?>