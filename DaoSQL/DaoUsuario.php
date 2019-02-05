<?php

include 'Model/mUsuario.php';

class DaoUsuario extends mUsuario {

    protected $sqlInsert = "insert into usuarios(usuLogin, usuNome, usuEmail, ususenha, nivel)values('%s','%s','%s','%s','%s')";
   // protected $sqlUpdate = "update amigos set nome ='%s', telefone='%s', email='%s' where id='%s'";
    protected $sqldelete = "delete from usuarios where usuId='%s'";
    protected $sqlSelect = "select * from usuarios where usuLogin ='%s'";
    protected $sqlSelect1 = "select * from usuarios";
  //  protected $sqlBusca = "select * from amigos where nome like '%%s%' order by nome";

    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getUsuLogin(), $this->getUsuNome(), $this->getUsuEmail(), $this->getUsuSenha(), 1);
        return $this->RunQuery($sql);
    }

//    public function update(){
//        $sql = sprintf($this->sqlUpdate,$this->getNome(), $this->getTelefone(), $this->getEmail(), $this->getCodAmigo());
//        return $this->RunQuery($sql);
//    }
//    
   public function delete(){
       $sql = sprintf($this->sqldelete, $this->getUsuId());
       return $this->RunQuery($sql);
   }
    
    public function select(){
        $sql = sprintf($this->sqlSelect, $this->getUsuLogin());
        return $this->RunSelect($sql);
    }
    
        public function select1(){
        $sql = sprintf($this->sqlSelect1);
        return $this->RunSelect($sql);
    }
//        public function busca(){
//        $sql = sprintf($this->sqlBusca, $this->getNome());
//        return $this->RunSelect($sql);
//    }
//    
//    public function load(){
//        $rs = $this->select(sprintf("and id = '%s'", $this->getCodAmigo()));
//        $this->setCodAmigo($rs[0]['id']);
//        $this->setNome($rs[0]['nome']);
//        $this->setTelefone($rs[0]['telefone']);
//        $this->setEmail($rs[0]['email']);
//        return $this;
//    }
}
