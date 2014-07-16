<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if(isset($_POST['nombre'])){
    
    $autorC = new AutorController();
    $autorC->insertaAutor($_POST);
  }

?>

   <div class="container"><!--inicio de container-->
  <div class="row"><!--inicio de row 1-->
        
        <div class="col-md-12"><!--inicio de col 2-->
        <div class="d1"><!--div 1-->
        <hr>
          <h1 class="text-center">Autor</h1>
          <hr>
          </div><!--div 1-->
          <!--inicio de form integrante-->
          <div id="" class="">
              <form role="form" id="id_form_autor" action="" method="POST">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Enter nombre">
                </div>
                <div class="form-group">
                  <label for="apellidos">Apellidos:</label>
                  <input type="text" class="form-control" name="apellidos" placeholder="Enter apellidos">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter email">
                </div>
                <left><input type="submit" class="btn btn-primary" id="aceptar2" value="aceptar"></button><left>
              </form>
          </div>
          <div class="d2">
          <hr>

              <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
              <a class="ifancyboX" href="autor.php" title="Formularios"><center><span class="glyphicon glyphicon-user">Ayuda</span></center></a>
              </div>
              <hr>
          </div>
          <!--fin de form integrante-->
    </div>
  </div><!--Fin de row 1-->
  </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>