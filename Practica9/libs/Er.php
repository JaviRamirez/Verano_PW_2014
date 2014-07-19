<?php

class Er {
    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	/*public function validar_foto($archivo){
   $var= $archivo.split(‘.’);
   if($var[$var.length-1] == ‘jpg’)
      return true;
   else{
      //alert(‘El archivo debe ser .jpg’);
      return false;
   }
}*/
     public function valida_tipo($valor){
     //if(isset($_POST['aceptar10'])){    
    $mime = array('image/jpg', 'image/jpeg','image/png');
    # Buscamos si el archivo que subimos tiene el MIME type que permitimos en nuestra subida
    if( !in_array( $valor, $mime))
    {
        
        //print_r('<p>Ups! Solamente puedes subir imágenes con la extensión GIF, JPG, JPEG, PJPEG o PNG</p>');

        return true;
    }else{
        //print_r('<p>la imagen es correcta! el valor de:'.$valor.' es valido</p>');
        return false;
    }
 //}

}
    # Le decimos al usuario que se olvido de subir un archivo
    /*if( $valor['portada']['type'] == '' )
    {
        print_r('Hey -.-, te olvidaste de un pequeño detalle... No subiste ningún archivo!');
        return true;
    }*/
    public function valida_tamanio($valor){
    # Indicamos hasta que peso de archivo puede subir el usuario. Tamaño maximo que se aceptara ser de 5mb.
    if( $valor < 5500000) //4.8 Mb  
    {
        
        //print_r('<p>El archivo que subio esta dentro del limite:'.$valor.' entro en el if</p>');
        return true;
        
    }else{
       // print_r('<p>el archivo esta pesado:'.$valor.' bajale, entro al if</p>');
        return false;

    }

}
    # Si el archivo cumple con las expectativas quiere decir que la variable $error viene vacia y se ejecutará la función que colocaremos ahí
    /*if(empty($error))
    {
        # Aquí es donde estará nuestro array();
                $args = array(
        'filename' => $_FILES['imagen']['name'],
        'tmp_name' => $_FILES['imagen']['tmp_name']
        );
            dinvaders_upload_image($args);
    }*/

     public function valida_alfanumericos($valor){
		if (!ereg("^[a-zA-Z0-9 ]+$",$valor)) {
		 
		 return false;
		}else {
		// Su código o una confirmación
		 
		 return true;
     } 
}

      public function valida_numericos($valor){
			if (!ereg("^[0-9]+$",$valor)) {
			 
			 return false;
			}else {
			// Su código o una confirmación
			 return true;
			}
    }


      public function valida_url($valor){
			if (ereg("^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu)$",$valor)) {
		   
		   return true;
		   }  else { 
		   	return false;

      }
}
    
	/*public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}*/

    public function manda_errores($valor1,$valor2){

        if(!$valor1){
            return false;
            
        }else{

            print_r('<div class="alert alert-danger">'.foreach ($revistaC->errores as $value) {//se especifica un arreglo, y regresa la llave
                    echo '<p>¡¡¡ Error  !!! '.$value.'</p>';
                  }.'</div>');
            
            return true;
        }
        

    }

	public function valida_nombre($valor){
        if(preg_match("/^([a-zA-ZñÑ\s]{2,50})+$/",$valor)){
            //print_r('El nombre:'.$valor.' es valido');
                return false;
            }else{
                //print_r('el nombre'.$valor.' no es valido');
                return true;
            }
    }

     /*public function valida_email($valor){
        if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$valor)){
            return true;
        }else{
            return false;
            }
        } */

        public function valida_username($valor){
        if(preg_match("/^([a-zA-Z0-9])+$/",$valor))
            return true;
            else{
                return false;
            }
    }

     public function valida_password($valor){
        if(preg_match("/^([A-Za-z0-9_+,.:.,=?();!#$%&*<>-])+$/",$valor))
        {
          return true;
        }
            else{
                return false;
            }
    }

    public function valida_rfc($valor){
        if(preg_match("/^([A-Z,Ã‘,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_cp($valor){     
        if(preg_match("/^(^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

       /*public function valida_nombre($valor){
        if(preg_match("/^([a-zA-ZÃ±Ã‘\s]{2,50})+$/",$valor))
                return true;
            else{
                return false;
            }
    }*/

    public function valida_curp($valor){  
        if(preg_match("/^(^.*(?=.{18})(?=.*[0-9])(?=.*[A-ZÃ‘]).*$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

        public function valida_telefono($valor){ 
        if(preg_match("/^(^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

    public function valida_tarjeta($valor){
        if(preg_match("/^(^((67\d{2})|(4\d{3})|(5[1-5]\d{2})|(6011))(-?\s?\d{4}){3}|(3[4,7])\ d{2}-?\s?\d{6}-?\s?\d{5}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

        public function valida_fecha($valor){
        if(preg_match("/^(^\d{1,2}\/\d{1,2}\/\d{2,4}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_hora($valor){  
        if(preg_match("/^(^[0-2][0-3]:[0-5][0-9]$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

    public function valida_imagen($valor) {    
        if(preg_match("%\.(jpg)$%i",$valor)){
            return true;
           } else{
                return false;
            }
    }

   
}

?>    