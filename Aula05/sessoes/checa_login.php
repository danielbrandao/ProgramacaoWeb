<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

session_start();

if($login == "aula" && $senha == "php"){
    $_SESSION['logou'] = 1;
}else{
    $_SESSION['logou'] = 0;
}

header("Location: principal.php");

?> 