<?php
	class IntegranteController {
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Continente();
		}

		public function insertaIntegrante($datos){
			echo "<pre>datos:";
			print_r($datos);
			echo "</pre>";
			$integrante=new Integrante();//se prueba conexion
			$integrante->set_nombre($datos['nombre']);
			$integrante->set_apellido($datos['apellido']);
			$integrante->set_nombre($datos['peso']);
			$integrante->set_estatura($datos['estatura']);
			$integrante->set_foto($datos['foto']);
			$integrante->set_edad($datos['edad']);
			$integrante->set_idequipo($datos['idequipo']);

			if(count($integrante->errores)>0){
				print_r($integrante->errores);
			}
			//die();//detieene o mata todo el script.

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