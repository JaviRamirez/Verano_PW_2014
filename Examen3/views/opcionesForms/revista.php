<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if(isset($_POST['nombre'])){
    
    $revistaC = new RevistaController();
    $revistaC->insertaRevista($_POST);
  }

?>

   <div class="container"><!--inicio de container-->
  <div class="row" id="id_rev"><!--inicio de row 1-->
        
        <div class="col-md-12"><!--inicio de col 2-->
        <div class="d1"><!--div 1-->
        <hr>
          <h1 class="text-center">Revista</h1>
          <hr>
          </div><!--div 1-->
          <!--inicio de form integrante-->
          <div id="" class="">
              <form role="form" id="id_form_revista" action="" method="POST">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Enter nombre">
                </div>
                <div class="form-group">
                  <label for="portada">Portada:</label>
                  <input type="text" class="form-control" name="portada" placeholder="Enter portada">
                </div>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker_revista' data-date-format="YYYY/MM/DD">
                    <label for="datetimepicker_revista">Fecha:</label>
                    <input type='text' class="form-control" name="fecha" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
                </div>
                <div class="form-group">
                  <label for="volumen">Volumen:</label>
                  <input type="text" class="form-control" name="volumen" placeholder="Enter volumen">
                </div>
                <div class="form-group">
                  <label for="titulo">Titulo:</label>
                  <input type="text" class="form-control" name="titulo" placeholder="Enter titulo">
                </div>
                <div class="form-group">
                  <label for="subtitulo">Subtitulo:</label>
                  <input type="text" class="form-control" name="subtitulo" placeholder="Enter subtitulo">
                </div>
                <div class="form-group">
                  <label for="numero">Numero:</label>
                  <input type="text" class="form-control" name="numero" placeholder="Enter numero">
                </div>
                <div class="form-group">
                  <label for="clave">Clave:</label>
                  <input type="text" class="form-control" name="clave" placeholder="Enter clave">
                </div>
                <div class="form-group">
                  <label for="directorio">Directorio:</label>
                  <textarea rows="5" cols="" class="form-control" name="directorio" placeholder="Enter directorio"></textarea>
                </div>
                <div class="form-group">
                  <label for="editorial">Editorial:</label>
                  <textarea rows="5" cols="" class="form-control" name="editorial" placeholder="Enter editorial"></textarea>
                </div>
                <div class="form-group">
                          <label for="id_status">id_Status:</label>
                        <select name="id_status">
                        <option value="">Selecciona una opci&oacute;n</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                <left><input type="submit" class="btn btn-primary" id="aceptar3" value="aceptar"></button><left>
              </form>
          </div>
          <div class="d2"><!--div 2-->
          <hr>

              <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
              <a class="ifancyboX" href="autor.php" title="Formularios"><center>Ayuda <span class="glyphicon glyphicon-book"></span></center></a>
              </div>
          </div><!--cierra div 2-->
          <!--fin de form integrante-->
    </div>
  </div><!--Fin de row 1-->
  </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>