<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;

		function __construct(){
			 parent::Pais();
		}

		public function insertaPais($datos,$archivos){
			/*echo "<pre>datos:";
			print_r($datos);
			print_r($archivos);
			echo "</pre>";*/

			//$pais=new Pais();//se prueba conexion
			$this->set_nombre($datos['nombre']);
			$this->set_bandera($archivos['bandera']);
			$this->set_idcontinente($datos['idcontinente']);

			if(count($this->errores)>0){
				//print_r($this->errores);
				$this->muestra_errores = true;
				//die();//detieene o mata todo el script.
			}else{
				//mueve la imagen
				//move_uploaded_file($archivos['bandera']['tmp_name'],//ruta origen
				//"../images/".$archivos['bandera']['name']);//ruta destino

				//$pais->inserta($pais->get_atributos());
			
			}

		}
		
		public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuarios where email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}

		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}

	}

?>