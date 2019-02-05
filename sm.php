<?php

// este arquivo configura a inicialização do smarty

include_once 'inc/smarty/libs/Smarty.class.php';

$sm = new Smarty();
$sm->template_dir = "view";
$sm->compile_dir = "inc/smarty/templates_c";