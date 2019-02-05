
<?php
 session_start();
 include './DaoSQL/DaoUsuario.php';
require_once 'sm.php';

$ar = new DaoUsuario();



 if(isset($_POST['nome'])&& isset($_POST['email'])&& isset($_POST['UsuLogin'])&& isset($_POST['cadSenha'])){
    $ar->setUsuNome($_POST['nome']);
    $ar->setUsuEmail($_POST['email']);
    $ar->setUsuLogin($_POST['UsuLogin']);
    $ar->setUsuSenha($_POST['cadSenha']);
    $ar->insert();
    echo"inserido com sucesso!";
}
    


   $sm->display("cadastro.tpl");