<?php

class Estadio extends Modelo{
    public $nombre_tabla = 'estadio';
    public $pk = 'idestadio';
    
    
    public $atributos = array(
        
        'idestadio'=>array(),
        'nombre'=>array(),
        'idciudad'=>array()
    );
    
    public $errores = array( );
    
    private $idestadio;
    private $nombre;
    private $idciudad;
       
    
    function Estadio(){
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

    public function get_idestadio(){
        return $this->idestadio;
    }
    
    public function set_idestadio($valor){
        $this->idestadio = trim($valor);
    }
    
    public function get_idciudad(){
        return $this->idciudad;
    }
    
    public function set_idciudad($valor){
        $this->idciudad = trim($valor);
    }


    
    
    
}

?>
