<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php');
  include ('../../controllers/IntegranteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if(isset($_POST['nombre'])){
    
    $integranteC = new IntegranteController();
    $integranteC->insertaIntegrante($_POST);
  }

?>

   <div class="container"><!--inicio de container-->
  <div class="row"><!--inicio de row 1-->
        
        <div class="col-md-12"><!--inicio de col 2-->
        <hr>
          <h1>Integrante</h1>
          <!--inicio de form integrante-->
          <div id="container_integrante" class="elemento_equipo">
              <form role="form" id="id_form1"action="" method="POST">
                <div class="form-group">
                  <label for="nombre">nombre:</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Enter nombre">
                </div>
                <div class="form-group">
                  <label for="apellido">Apellido:</label>
                  <input type="text" class="form-control" name="apellido" placeholder="Enter apellido">
                </div>
                <div class="form-group">
                  <label for="peso">Peso:</label>
                  <input type="text" class="form-control" name="peso" placeholder="Enter peso">
                </div>
                <div class="form-group">
                  <label for="estatura">Estatura:</label>
                  <input type="text" class="form-control" name="estatura" placeholder="Enter estatura">
                </div>
                <div class="form-group">
                  <label for="foto">Foto:</label>
                  <input type="file" name="foto">
                  <p class="help-block">Selecciona una imagen para agregar.</p>
                </div>
                <div class="form-group">
                  <label for="edad">Edad:</label>
                  <input type="text" class="form-control" name="edad" placeholder="Enter edad">
                </div>
                <div class="form-group">
                      <div class="form-group">
                          <label for="idequipo">Nombre:</label>
                        <select name="idequipo">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <!--<option value="milan">Milan</option>
                          <option value="chivas">Chivas</option>
                          <option value="celaya">Celaya</option>-->
                        </select>
                      </div>
                </div>
                <left><input type="submit" class="btn btn-primary" id="aceptar3" value="aceptar"></button><left>
              </form>
          </div>
          <hr>

              <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
              <a class="ifancybox" href="entrenador.php" title="Formularios"><center><img src="../images/gog.png" width="250" height="150" /></center></a>
              </div>
          <!--fin de form integrante-->
    </div>
  </div><!--Fin de row 1-->
  </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>