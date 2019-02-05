

<?php



            $um12 = 10;

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


$resulMega[1] = 11;
$resulMega[2] = 12;
$resulMega[3] = 13;
$resulMega[4] = 14;
$resulMega[5] = 15;
$resulMega[6] = 16;
$resulMega[7] = 17;
$resulMega[8] = 18;
$resulMega[9] = 19;
$resulMega[10] = 20;

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

                                    echo $resulMega[$um] = $resulMega[$i];
                                    echo'-';
                                    echo $resulMega[$dois] = $resulMega[$j] ;
                                    echo'-';
                                    echo $resulMega[$tres] =  $resulMega[$n];
                                    echo'-';
                                    echo $resulMega[$quatro] = $resulMega[$m];
                                    echo'-';
                                    echo $resulMega[$cinco] = $resulMega[$f];
                                    echo'-';
                                    echo $resulMega[$seis] = $resulMega[$g];
                                    echo'<br/>';


                                    $qtdCartoes = $qtdCartoes + 1;
                                }
                            }
                        }
                    }
                }
            }

