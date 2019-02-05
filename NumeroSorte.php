<?php

class NumeroSorte {

    private $um;
    private $dois;
    private $tres;
    private $quatro;
    private $cinco;
    private $seis;
    
    function getUm() {
        return $this->um;
    }

    function getDois() {
        return $this->dois;
    }

    function getTres() {
        return $this->tres;
    }

    function getQuatro() {
        return $this->quatro;
    }

    function getCinco() {
        return $this->cinco;
    }

    function getSeis() {
        return $this->seis;
    }

    function setUm($um) {
        $this->um = $um;
    }

    function setDois($dois) {
        $this->dois = $dois;
    }

    function setTres($tres) {
        $this->tres = $tres;
    }

    function setQuatro($quatro) {
        $this->quatro = $quatro;
    }

    function setCinco($cinco) {
        $this->cinco = $cinco;
    }

    function setSeis($seis) {
        $this->seis = $seis;
    }

    
    function mumerosDaSorte() {
        $numerosDaSorte = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15",
            "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30",
            "31", "32", "33", "34", "35", "36", "37", "38", "39", "40", "41", "42", "43", "44", "45",
            "46", "47", "48", "49", "50", "51", "52", "53", "54", "55", "56", "57", "58", "59", "60");

        $ateSeis = array_rand($numerosDaSorte, 6);

        $this->setUm($numerosDaSorte[$ateSeis[0]])  ;
        $this->setDois($numerosDaSorte[$ateSeis[1]]);
        $this->setTres($numerosDaSorte[$ateSeis[2]]);
        $this->setQuatro($numerosDaSorte[$ateSeis[3]]);
        $this->setCinco($numerosDaSorte[$ateSeis[4]]) ;
        $this->setSeis($numerosDaSorte[$ateSeis[5]]);
    }

}
