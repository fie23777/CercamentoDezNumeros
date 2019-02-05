<?php

include './NumeroSorte.php';
require_once 'sm.php';

$nunSorte = new NumeroSorte();

$nunSorte->mumerosDaSorte();


$sm->assign("um", $nunSorte->getUm());
$sm->assign("dois", $nunSorte->getDois());
$sm->assign("tres", $nunSorte->getTres());
$sm->assign("quatro", $nunSorte->getQuatro());
$sm->assign("cinco", $nunSorte->getCinco());
$sm->assign("seis", $nunSorte->getSeis());

$sm->display("numeroSorte.tpl");
