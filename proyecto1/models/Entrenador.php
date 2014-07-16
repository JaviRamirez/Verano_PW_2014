<?php

class Entrenador extends Modelo{
    public $nombre_tabla = 'entrenador';
    public $pk = 'identrenador';
    
    
    public $atributos = array(
        
        'idpais'=>array()
        
    );
    
    public $errores = array( );
    
    //private $idcontinente;
    private $idpais;
       
    
    function Entrenador(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_idpais(){
        return $this->idpais;
    } 

    public function set_idpais($valor){


            $this->idpais = trim($valor);
    }

    /*public function get_idcontinente(){
        return $this->idcontinente;
    }
    
    public function set_idcontinente($valor){
        $this->idcontinente = trim($valor);
    }*/
        
}

?>