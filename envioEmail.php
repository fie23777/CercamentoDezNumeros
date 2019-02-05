<?php

include "./Conf/Configuracao.php";

if(strlen($_POST['nome']))
{
    if(sendMail($_POST['email'],'fie2377@gmail.com', $_POST['mensagem'], 'Formulário de contato'))
    {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else
    {
        echo "Ocorreu um erro ao enviar";
    }
    echo "<br><a href='index.php'>Voltar</a>";
    exit();
}?>