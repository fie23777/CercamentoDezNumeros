<?php
session_start();

include 'DaoSQL/DaoUsuario.php';
include 'sm.php';
$totalUsu = new DaoUsuario();


$nivel = isset($_SESSION['nivel'])?$_SESSION['nivel']:"";



 if(isset($_SESSION['acesso']) == "permitido" && $nivel == 2){
 
   if(isset($_GET['delete']))           //delete
    $totalUsu->setUsuId($_GET['delete']);
    $totalUsu->delete();
   

    $sm->assign("lista",  $totalUsu->select1());
    $sm->assign("nome","Área administrativa");

    $sm->display('mostraUsu.tpl');
    
    
   }else{
      
     $sm->display("erroAdministrador.tpl");
 }

