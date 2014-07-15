<?php

class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk = 'idpais';
    
    
    public $atributos = array(
        
        //'idpais'=>array(),
        'nombre'=>array(),
        'bandera'=>array(),
        'idcontinente'=>array()
    );
    
    public $errores = array( );
    
    //private $idpais;
    private $nombre;
    private $bandera;
    private $idcontinente;
       
    
    function Pais(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

            $this->nombre = trim($valor);
    }

    /*public function get_idpais(){
        return $this->idpais;
    }
    
    public function set_idpais($valor){
        $this->idpais = trim($valor);
    }*/
    
    public function get_bandera(){
        return $this->bandera;
    }
    
    public function set_bandera($valor){
        $this->bandera = trim($valor);
    }

    public function get_idcontinente(){
        return $this->idcontinente;
    }
    
    public function set_idcontinente($valor){
        $this->idcontinente = trim($valor);
    }
}

?>