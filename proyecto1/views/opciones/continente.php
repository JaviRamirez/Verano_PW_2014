<?php

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Continente.php');
  include ('../../controllers/ContinenteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');


   if(isset($_POST['nombre'])){
     
     $continenteC = new ContinenteController();
     $continenteC->insertaContinente($_POST); 
   }


?>

    <div class="container" id="cont"><!--inicio de container-->
              <h2 class="text-center">Continente</h2>
              <hr>
              <div class="row"><!--inicio de row principal 1-->
              <!--Inicia form-->
                  <form role="form" action="" method="post">
                  <div class="form-group">
                          <label for="nombre">Ciudad:</label>
                          <select name="nombre">
                          <option value="">Selecciona una opci&oacute;n</option>
                          <option value="America">America</option>
                          <option value="Asia">Asia</option>
                          <option value="Africa">Africa</option>
                          <option value="Europa">Europa</option>
                          <option value="Oceania">Oceania</option>
                          <!--<option value="munich">Munich</option>
                          <option value="porto">Porto</option>
                          <option value="porto_alegre">Porto Alegre</option>-->
                        </select>
                  </div>
		                    <left><input type="submit" class="btn btn-primary" value="aceptar"></button><left>
		                    
                  </form>
            <!--fin de form-->
              </div><!--fin de row principal 1-->

              <hr>
              <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
              <a class="ifancybox" href="equipo.php" title="Formularios"><center><img src="../images/gog.png" width="250" height="150" /></center></a>
              </div>
		               
    </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>