

<?php
session_start();

require_once 'sm.php';

if (isset($_SESSION['acesso']) == "permitido") {

    if ($_POST) {

        function cercar() {


            $um12 = isset($_POST['numeros']) ? $_POST['numeros'] : "";

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


            $resulMega = array();

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

                                    echo $resulMega[$um] = $i;
                                    echo'-';
                                    echo $resulMega[$dois] = $j;
                                    echo'-';
                                    echo $resulMega[$tres] = $n;
                                    echo'-';
                                    echo $resulMega[$quatro] = $m;
                                    echo'-';
                                    echo $resulMega[$cinco] = $f;
                                    echo'-';
                                    echo $resulMega[$seis] = $g;
                                    echo'<br/>';


                                    $qtdCartoes = $qtdCartoes + 1;
                                }
                            }
                        }
                    }
                }
            }


            echo '<div style="'
            . ' position: fixed;top: 30px;right: 800px;'
            . ' background-color: #1E90FF;'
            . ' border-radius: 10px; padding:5px;'
            . ' width:250px; height:100px;">'
            . ' A quantidade de cartoes são de ' . $qtdCartoes . '<br/>'
            . ' Valor dos jogos: R$' . number_format($qtdCartoes * $valorCartao, 2) . ''
            . '<br/><br/><a href="index.php">Volar</a>'
            . ' </div>';
        }

        cercar();
    }
} else {
     $sm->display("erro.tpl");
}