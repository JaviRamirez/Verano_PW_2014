<?php

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Pais.php');
  include ('../../controllers/PaisController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if(isset($_POST['nombre'])){
    $paisC = new PaisController();
    $paisC->insertaPais($_POST);
  }

?>
     
     <div class="container"><!--inicio de container-->
     <h2 class="text-center">Pa&iacute;s</h2>
     <hr>
     <div class="row"><!--inicio de row principal 1-->
              <form role="form" id="id_form10" action="" method="POST">
		              <div class="form-group">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control"  name="nombre" placeholder="Enter name">
                  </div>
		              <div class="form-group">
		                      <label for="bandera">Bandera</label>
		                      <input type="file" id="bandera" name="bandera">
		                      
		              </div>
                  <div class="form-group">
                          <label for="idcontinente">Continente:</label>
                          <select name="idcontinente">
                          <option value="">Selecciona una opci&oacute;n</option>
                          <option value="america">America</option>
                          <option value="asia">Asia</option>
                          <option value="oceania">Oceania</option>
                          <option value="africa">Africa</option>
                          <option value="europa">Europa</option>
                        </select>
                  </div>
                  <left><input type="submit" class="btn btn-primary" value="aceptar"></button><left>
		           </form>
            <!--fin de form-->
		       </div><!--fin de rows principal 1-->
           <hr>

           <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
              <a class="ifancybox" href="equipo.php" title="Formularios"><center><img src="../images/gog.png" width="250" height="150" /></center></a>
              </div>

		</div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>