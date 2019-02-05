<?php
require_once 'Connection/Connection.php';

class mUsuario extends Connection{
    
    private $usuLogin;
    private $usuNome;
    private $usuEmail;
    private $usuSenha;
    private $usuId;
    
    
    function getUsuId() {
        return $this->usuId;
    }

    function setUsuId($usuId) {
        $this->usuId = $usuId;
    }

        function getUsuLogin() {
        return $this->usuLogin;
    }

    function getUsuNome() {
        return $this->usuNome;
    }

    function getUsuEmail() {
        return $this->usuEmail;
    }

    function getUsuSenha() {
        return $this->usuSenha;
    }

    function setUsuLogin($usuLogin) {
        $this->usuLogin = $usuLogin;
    }

    function setUsuNome($usuNome) {
        $this->usuNome = $usuNome;
    }

    function setUsuEmail($usuEmail) {
        $this->usuEmail = $usuEmail;
    }

    function setUsuSenha($usuSenha) {
        $this->usuSenha = $usuSenha;
    }



    
}
