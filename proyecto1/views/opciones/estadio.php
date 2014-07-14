<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Estadio.php');
  //include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

?>

    <div class="container"><!--inicio de container-->
               <h2 class="text-center">Estadio</h2>
               <hr>
              <div class="row"><!--inicio de row principal 1-->
              <!--Inicia form-->
                  <form role="form" id="id_form6" action="" method="post">
                  <div class="form-group">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control" name="nombre" placeholder="Enter nombre estadio">
                  </div>
                  <div class="form-group">
                          <label for="nombre">Ciudad:</label>
                          <select name="ciudad">
                          <option value="">Selecciona una opci&oacute;n</option>
                          <option value="madrid">Madrid</option>
                          <option value="milan">Milan</option>
                          <option value="munich">Munich</option>
                          <option value="porto">Porto</option>
                          <option value="porto_alegre">Porto Alegre</option>
                        </select>
                  </div>
                        <left><input type="submit" class="btn btn-primary" value="aceptar"></button><left>
                  </form>
            <!--fin de form-->
              </div><!--fin de row principal 1-->
              <hr>

              <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
              <a class="ifancybox" href="entrenador.php" title="Formularios"><center><img src="../images/gog.png" width="250" height="150" /></center></a>
              </div>
		               
    </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>