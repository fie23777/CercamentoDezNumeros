<?php
include_once'Conf/Configuracao.php';

class Connection extends Configuracao {

    public static $db;
    
    private function instancia() {
        if (!self:: $db) {
            self:: $db = $this->conectar();
        }
        return self::$db;
    }
    private function conectar() {
        try {
            $db = new PDO("mysql:host = localhost; dbname=megasena", "root", "");
            //  $objConexao->setAttribute(PDO::ATTR_ERRMODE,ERRM);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $db;
    }

    public function RunQuery($sql) {
        $con = $this->instancia()->prepare($sql);
        return $con->execute();
    }

    public function RunSelect($sql) {
        $con = $this->instancia()->prepare($sql);
        $con->execute();
        return $con->fetchAll(PDO::FETCH_ASSOC);
    }

}
