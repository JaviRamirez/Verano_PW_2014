<?php
  include ('../../libs/security.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php');
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  $equipoC = new EquipoController();

  if(isset($_POST['nombre'])){//exclusivo para imprimir arreglos, verifica que nombre tenga algo
  $equipoC->insertaEquipo($_POST,$_FILES);//manda llamar la accion
}
?>

    <div class="container" id="eq"><!--inicio de container-->
              <h2 class="text-center">Equipo</h2>

              <?php
          if ($equipoC->muestra_errores) {
            ?>
            <div class="alert alert-danger">
              <?php
                  foreach ($equipoC->errores as $value) {//se especifica un arreglo, y regresa la llave
                    echo '<p>¡¡¡ Error  !!! '.$value.'</p>';
                  }
              ?>
        </div>
        <?php    
              
          }
        ?>


              <hr>
              <div class="row"><!--inicio de row principal 1-->
              <!--Inicia form-->
                <form role="form" id="id_form5" action="" method="post" ENCTYPE="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Enter nombre" value="<?php echo $equipoC->get_nombre();?>">
                        </div>
                        <div class="form-group">
                                  
                                    <label for="idpais">id_Pa&iacute;s</label>
                                    <?php echo $equipoC->getDropDown('pais','idpais','idpais');  ?>
                                    
                                    </select>
            
                        </div>
                        <div class="form-group">
                              <label for="escudo">Escudo:</label>
                              <input type="file" name="escudo" value="<?php echo $equipoC->get_idpais(); ?>">
                              <p class="help-block">Selecciona una imagen para agregar.</p>
                        </div>
                          <left><input type="submit" class="btn btn-primary" value="aceptar"></button><left>
                </form>
            <!--fin de form-->
              </div><!--fin de row principal 1-->
              <hr>

              <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
              <a class="ifancybox" href="./continente.php" title="Formularios"><center><img src="../images/gog.png" width="250" height="150" /></center></a>
              </div>

              <div class="col-md-6">
                <h2 class="text-center">Lista de Equipos</h2>
                <?php $equipoC->show_grid(); ?>
		               
    </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>