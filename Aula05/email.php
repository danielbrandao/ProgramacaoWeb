<?php

$para = "professor@danielbrandao.com.br";
$assunto = "Cadastro em nosso site";
$mensagem = "Ola. Cadastro realizado com sucesso.";

if(mail($para, $assunto, $mensagem))
    echo "Mensagem enviada com sucesso.";
else
    echo "Erro no envio da mensagem";

?>
