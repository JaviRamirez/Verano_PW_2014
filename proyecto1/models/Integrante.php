<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'integrante';
    public $pk = 'idintegrante';
    
    
    public $atributos = array(
        
        'idintegrante'=>array(),
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array()
        'estatura'=>array(),
        'foto'=>array(),
        'edad'=>array(),
        'idequipo'=>array()
    );
    
    public $errores = array( );
    
    private $idintegrante;
    private $nombre;
    private $apellido;
    private $peso;
    private $estatura;
    private $foto;
    private $edad;
    private $idequipo;
       
    function Integrante(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }

    public function get_idintegrante(){
        return $this->idintegrante;
    }
    
    public function set_idintegrante($valor){
        $this->idintegrante = trim($valor);
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

    public function get_apellido(){
        return $this->nombre;
    } 

    public function set_apellido($valor){

        $er = new Er();
        
        if ( !$er->valida_apellido($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

            $this->nombre = trim($valor);
    }
    
    public function get_peso(){
        return $this->peso;
    }
    
    public function set_peso($valor){
        $this->peso = trim($valor);
    }

    public function get_estatura(){
        return $this->peso;
    }
    
    public function set_estatuta($valor){
        $this->peso = trim($valor);
    }

    public function get_foto(){
        return $this->peso;
    }
    
    public function set_foto($valor){
        $this->peso = trim($valor);
    }
    
    public function get_Edad(){
        return $this->peso;
    }
    
    public function set_Edad($valor){
        $this->peso = trim($valor);
    }

    public function get_idequipo(){
        return $this->peso;
    }
    
    public function set_idequipo($valor){
        $this->peso = trim($valor);
    }
    
}

?>
