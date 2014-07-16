<?php

class Articulo extends Modelo{

    public $nombre_tabla = 'articulo';
    public $pk = 'id_articulo';
    
    
    public $atributos = array(
        
        'nombre'=>array(),
        'resumen'=>array(),
        'abstract'=>array(),
        'introduccion'=>array(),
        'metodologia'=>array(),
        'contenido'=>array(),
        'fecha_creacion'=>array(),
        'archivo_pdf'=>array(),
        'id_status'=>array(),
        'conclusiones'=>array(),
        'agradecimientos'=>array(),
        'referencias'=>array()
        
    );
    
    public $errores = array( );
    
    private $nombre;
    private $resumen;
    private $abstract;
    private $introduccion;
    private $metodologia;
    private $contenido;
    private $fecha_creacion;
    private $archivo_pdf;
    private $id_status;
    private $conclusiones;
    private $agradecimientos;
    private $referencias;
    
    
    function Articulo(){
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

        $er=new ER();
        if(!$er->valida_nombre($valor)){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
            
        }

            $this->nombre = trim($valor);
        
    }

    public function get_resumen(){

        return $this->resumen;
    } 

    public function set_resumen($valor){

        /*$er=new ER();
        if(!$er->valida_nombre($valor)){
            $this->errores[] = "Este apellido (".$valor.") no es valido";
            
        }*/

            $this->resumen = trim($valor);
        
    }

    public function get_abstract(){

        return $this->abstract;
    } 

    public function set_abstract($valor){

        /*$er=new ER();
        if($er->valida_abstract($valor)){
            $this->errores[] = "Este abstract (".$valor.") no es valido";
            
        }*/

            $this->abstract = trim($valor);
        
    }

    public function get_introduccion(){

        return $this->introduccion;
    } 

    public function set_introduccion($valor){

        /*$er=new ER();
        if(!$er->valida_abstract($valor)){
            $this->errores[] = "Este abstract (".$valor.") no es valido";
            
        }*/

            $this->introduccion = trim($valor);
    }

    public function get_metodologia(){

        return $this->metodologia;
    } 

    public function set_metodologia($valor){

        /*$er=new ER();
        if(!$er->valida_abstract($valor)){
            $this->errores[] = "Este abstract (".$valor.") no es valido";
            
        }*/

            $this->metodologia = trim($valor);
        
    }

    public function get_contenido(){

        return $this->contenido;
    } 

    public function set_contenido($valor){

        /*$er=new ER();
        if(!$er->valida_abstract($valor)){
            $this->errores[] = "Este abstract (".$valor.") no es valido";
            
        }*/

            $this->contenido = trim($valor);
        
    }

    public function get_fecha_creacion(){

        return $this->fecha_creacion;
    } 

    public function set_fecha_creacion($valor){

        /*$er=new ER();
        if(!$er->valida_numericos($valor)){
            $this->errores[] = "Este fecha_creacion (".$valor.") no es valido";
            
        }*/

            $this->fecha_creacion = trim($valor);
        
    }

    public function get_archivo_pdf(){

        return $this->archivo_pdf;
    } 

    public function set_archivo_pdf($valor){

        /*$er=new ER();
        if(!$er->valida_archivos($valor)){
            $this->errores[] = "Este archivo_pdf (".$valor.") no es valido";
            
        }*/

            $this->archivo_pdf = trim($valor);
        
    }

    public function get_id_status(){

        return $this->id_status;
    } 

    public function set_id_status($valor){

        $er=new ER();
        if(!$er->valida_numericos($valor)){
            $this->errores[] = "Este id_status (".$valor.") no es valido";
            
        }

            $this->id_status = trim($valor);
        
    }

    public function get_conclusiones(){

        return $this->conclusiones;
    } 

    public function set_conclusiones($valor){

        /*$er=new ER();
        if(!$er->valida_alfanumericos($valor)){
            $this->errores[] = "Este nada (".$valor.") no es valido";
            
        }*/

            $this->conclusiones = trim($valor);
        
    }

    public function get_agradecimientos(){

        return $this->agradecimientos;
    } 

    public function set_agradecimientos($valor){

        /*$er=new ER();
        if(!$er->valida_alfanumericos($valor)){
            $this->errores[] = "Este nada (".$valor.") no es valido";
            
        }*/

            $this->agradecimientos = trim($valor);
        
    }

    public function get_referencias(){

        return $this->referencias;
    } 

    public function set_referencias($valor){

        /*$er=new ER();
        if(!$er->valida_alfanumericos($valor)){
            $this->errores[] = "Este nada (".$valor.") no es valido";
            
        }*/

            $this->referencias = trim($valor);
        
    }
    
}

?>
