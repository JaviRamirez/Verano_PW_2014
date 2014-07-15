<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Entrenador.php');
  include ('../../controllers/EntrenadorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if(isset($_POST['idpais'])){
    $entrenadorC = new EntrenadorController();
    $entrenadorC->insertaEntrenador($_POST);
  }

?>

    <div class="container"><!--inicio de container-->
              <h2 class="text-center">Entrenador</h2>
              <hr>
              <div class="row"><!--inicio de row principal 1-->
              <!--Inicia form-->
                <form role="form" action="" method="post">
                        <div class="form-group">
                          <div class="form-group">
                              <label for="idpais">Pa&iacute;s:</label>
                            <select name="idpais">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <!--<option value="brasil">Brasil</option>
                              <option value="alemania">Alemania</option>
                              <option value="costa_rica">Costa Rica</option>
                              <option value="uruguay">Uruguay</option>
                              <option value="francia">Francia</option>-->
                            </select>
                          </div>
                    </div>
                    <left><input type="submit" class="btn btn-primary" value="aceptar"></button><left>
                </form>
            <!--fin de form-->
              </div><!--fin de row principal 1-->


              <hr>
              <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
              <a class="ifancybox" href="estadio.php" title="Formularios"><center><img src="../images/gog.png" width="250" height="150" /></center></a>
              </div>
		               
    </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>