
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
        <meta charset="UTF-8">
        <title></title>
        
         <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="bootstrap/css/estilo.css" rel="stylesheet" type="text/css">
        
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/javascript.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <body>
<div class="container" >
    <div class="row"> 
        <div class="col-md-pull-6">
          <ul class=" nav nav-pills">
               <li><a href="index.php">Home</a></li>
               <li><a href="controlePrinc.php">Cercamento de numeros</a></li>
               <li><a href="CercardezView.php">Cercar 10 numeros</a></li>
               <li><a href="controleCadastro.php">Faça o cadastro</a></li>
               <li><a href="quemSou.php">Quem sou</a></li>
               <li><a href="login.php">Faça o login</a></li>
          </ul> <div class="msgErro"id="msgErro"></div>
        </div>
             <div class="jumbotron col-lg-12">
             <h2>Sistema de informação</h2>
            </div>
        

<?php

$numeros = array($_POST['primeiro'],    $_POST['segundo'],         $_POST['terceiro'],        $_POST['quarto'],$_POST['quinto'],
             $_POST['sexto'],           $_POST['setimo'],          $_POST['oitavo'],          $_POST['nono'],  $_POST['decimo'],
             $_POST['desPrimeiro'],     $_POST['desSegundo'],      $_POST['desTerceiro'],     $_POST['desQuarto'],
             $_POST['desQuinto'],       $_POST['desSexto'],        $_POST['desSetimo'],       $_POST['desOitavo'],
             $_POST['desNono'],         $_POST['vigesimo'],        $_POST['vigPrimeiro'],     $_POST['vigSegundo'],
             $_POST['vigTerceiro'],     $_POST['vigQuarto'],       $_POST['vigQuinto'],       $_POST['vigSexto'],
             $_POST['vigSetimo'],       $_POST['vigOitavo'],       $_POST['vigNono'],         $_POST['trigesimo'],
             $_POST['trigPrimeiro'],    $_POST['trigSegundo'],     $_POST['trigTerceiro'],    $_POST['trigQuarto'],
             $_POST['trigQuinto'],      $_POST['trigSexto'],       $_POST['trigSetimo'],      $_POST['trigOitavo'],
             $_POST['trigNono'],        $_POST['quadragesimo'],    $_POST['quadragPrimeiro'], $_POST['quadragSegundo'],
             $_POST['quadragTerceiro'], $_POST['quadragQuarto'],   $_POST['quadragQuinto'],   $_POST['quadragSexto'],
             $_POST['quadragSetimo'],   $_POST['quadragOitavo'],   $_POST['quadragNono'],     $_POST['quinquagesimo'],
             $_POST['quinquagPrimeiro'],$_POST['quinquagSegundo'], $_POST['quinquagTerceiro'],$_POST['quinquagQuarto'],
             $_POST['quinquagQuinto'],  $_POST['quinquagSexto'],   $_POST['quinquagSetimo'],  $_POST['quinquagOitavo'],
             $_POST['quinquagNono'],    $_POST['sexagesimo']);


foreach($numeros as $value){ 
    if($value != '') {
        $arrayValue[] = $value;
    } 
}

$primeiro = $arrayValue[0];
$segundo  = $arrayValue[1];
$terceiro = $arrayValue[2];
$quarto   = $arrayValue[3];  
$quinto   = $arrayValue[4];
$sexto    = $arrayValue[5];
$setiomo  = $arrayValue[6];
$oitavo   = $arrayValue[7];
$nono     = $arrayValue[8];
$decimo   = $arrayValue[9];




            $um12 = 10; // dez numeros a ser cerem cercados
            
            $um1 = $um12 - 5;
            $dois2 = $um12 - 4;
            $tres3 = $um12 - 3;
            $quatro4 = $um12 - 2;
            $cinco5 = $um12 - 1;
            $seis6 = $um12;
//echo"$num1 , $dois2, $tres3, $quatro4, $cinco5, $seis6 <br/>";
            $um = 0;
            $dois = 0;
            $tres = 0;
            $quatro = 0;
            $cinco = 0;
            $seis = 0;
            $qtdCartoes = 0;
            $valorCartao = 3;


$resulMega[1] = $primeiro;
$resulMega[2] = $segundo;
$resulMega[3] = $terceiro;
$resulMega[4] = $quarto;
$resulMega[5] = $quinto;
$resulMega[6] = $sexto;
$resulMega[7] = $setiomo;
$resulMega[8] = $oitavo;
$resulMega[9] = $nono;
$resulMega[10] = $decimo;


echo" <div class='numerosMarcados'><h2>Os números cercados são: $primeiro - "
        . " $segundo - $terceiro - $quarto - $quinto - $sexto - $setiomo -"
        . "  $oitavo - $nono - $decimo </h2></div> <br/>";
echo"<div class='divTable'>";

            for ($i = 1; $i <= $um1; $i++) {

                $cont = $i + 1;

                for ($j = $cont; $j <= $dois2; $j++) {

                    $cont = $j + 1;

                    for ($n = $cont; $n <= $tres3; $n++) {

                        $cont = $n + 1;

                        for ($m = $cont; $m <= $quatro4; $m++) {

                            $cont = $m + 1;

                            for ($f = $cont; $f <= $cinco5; $f++) {

                                $cont = $f + 1;

                                for ($g = $cont; $g <= $seis6; $g++) {

                                    echo "<table class='megaTable'><tr>"
                                    . "<td><h3>".$resulMega[$um] = $resulMega[$i];
                                    echo'-';
                                    echo "</h3></td><td><h3>".$resulMega[$dois] = $resulMega[$j] ;
                                    echo'-';
                                    echo "</h3></td><td><h3>".$resulMega[$tres] =  $resulMega[$n];
                                    echo'-';
                                    echo "</h3></td><td><h3>".$resulMega[$quatro] = $resulMega[$m];
                                    echo'-';
                                    echo "</h3></td><td><h3>".$resulMega[$cinco] = $resulMega[$f];
                                    echo'-';
                                    echo "</h3></td><td><h3>".$resulMega[$seis] = $resulMega[$g]."</h3></td></tr></table>";
                                    echo'<br/>';


                                    $qtdCartoes = $qtdCartoes + 1;
                                }
                            }
                        }
                    }
                }
            }

echo "</div>";