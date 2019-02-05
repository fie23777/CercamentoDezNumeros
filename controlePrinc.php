<?php
session_start();
require_once 'sm.php';



 
 //************************************************************************************************

 if(isset($_SESSION['acesso']) == "permitido"){
 
 $sm->display("principal.tpl");
 
 }else{
     $sm->display("erro.tpl");
 }



