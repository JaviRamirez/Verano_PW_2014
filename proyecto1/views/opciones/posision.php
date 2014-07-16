<?php

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Posicion.php');
  include ('../../controllers/PosicionController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if(isset($_POST['nombre'])){
    $posicion = new PosicionController();
    $posicion->insertaPosicion($_POST);
  }

?>
  
    <div class="container"><!--inicio de container-->
              <h2 class="text-center">Posici&oacute;n</h2>
              <hr>
              <div class="row"><!--inicio de row principal 1-->
              <!--Inicia form-->
                  <form role="form" id="id_form11" action="" method="post">
                  <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Enter nombre">
                  </div>
                  <div class="form-group">
                      <label for="abreviatura">Abreviatura:</label>
                      <input type="text" class="form-control" name="abreviatura" placeholder="Enter abreviatura">
                  </div>
                  <left><input type="submit" class="btn btn-primary" value="aceptar"></button><left>
                        
                  </form>
            <!--fin de form-->
              </div><!--fin de row principal 1-->
              <hr>

              <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
              <a class="ifancybox" href="http://www.google.com"><center><img src="../images/gog.png" width="250" height="150" /></center></a>
              </div>
		               
    </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>