<?php

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Continente.php');
  //include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

?>

    <div class="container"><!--inicio de container-->
              <h2 class="text-center">Continente</h2>
              <hr>
              <div class="row"><!--inicio de row principal 1-->
              <!--Inicia form-->
                  <form role="form" action="" method="post">
                  <div class="form-group">
                            <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Enter nombre">
                        </div>
		                    <left><button class="btn btn-primary" id="aceptar" name="aceptar">Aceptar</button><left>
		                    
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