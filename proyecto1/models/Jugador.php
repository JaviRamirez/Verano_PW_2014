<?php

class Jugador extends Modelo{
    public $nombre_tabla = 'jufador';
    public $pk = 'idjugador';
    
    
    public $atributos = array(
        
        'minutogol'=>array(),
        
    );
    
    public $errores = array( );
    
    //private $idcontinente;
    private $minutogol;
       
    
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
    
    
    public function get_minutogol(){
        return $this->minutogol;
    } 

    public function set_minutogol($valor){


            $this->minutogol = trim($valor);
    }

    /*public function get_idcontinente(){
        return $this->idcontinente;
    }
    
    public function set_idcontinente($valor){
        $this->idcontinente = trim($valor);
    }*/
        
}

?>