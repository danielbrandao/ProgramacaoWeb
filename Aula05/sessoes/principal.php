<?php

session_start();

if($_SESSION['logou'] == 1)
{
    echo "<h2>Bem-vindo ao sistema!</h2>";
}else{
    echo "Usuario e senha nao conferem. ";
    echo "<a href=formulario.html> Tente novamente</a>"; 
}

?>