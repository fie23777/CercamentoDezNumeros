<?php

session_start();

require_once 'sm.php';            // inclui o framework para se manipulados as assign... etc
include './DaoSQL/DaoUsuario.php'; //inclui a classe dao para manipulação do banco de dados




$pesq = new DaoUsuario(); // cria o objeto dao com as os CRUDs e funcoes

$usuario = isset($_POST['login']) ? $_POST['login'] : ''; // atribui os valores do form para as variaveis via post
$senha   = isset($_POST['senha']) ? $_POST['senha'] : '';

$usu ="nada";  // truque para as variaveis $usu não ser = $usuario
$sen ="nada";

$pesq->setUsuLogin($usuario);  //seta os valores para a consulta SQL
$pesq->setUsuSenha($senha);

$objetos = $pesq->select(); // atribuo o array para a variavel objetos

foreach ($objetos as $lista) {   // pego o conteudo do array login e senha
    $usu = $lista['usulogin'];
    $sen = $lista['usuSenha'];
    $nivel = $lista['nivel'];
}
if ($usu == $usuario && $sen == $senha ) {  // comparo com os posts, se forem iguais passa, se nao nao faz nada.
    $_SESSION['nivel'] = $nivel;
    $_SESSION['acesso'] = "permitido";    // cria a sessão para acessar as páginas
    $sm->assign("result", $pesq->select()); // printa o usuário logado

}

$nivel = isset($_SESSION['nivel'])?$_SESSION['nivel']:"";

if($nivel == 2){
    
        $sm->assign("administrador","Área administrativa");
        $sm->display("home.tpl");   //chama e envia os dados para página apresenta-los
}else{
    $sm->display("home.tpl");   //chama e envia os dados para página apresenta-los

}

 
