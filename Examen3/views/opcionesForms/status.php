<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Status.php');
  include ('../../controllers/StatusController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if(isset($_POST['status'])){
    
    $statusC = new StatusController();
    $statusC->insertaStatus($_POST);
  }

?>

   <div class="container"><!--inicio de container-->
  <div class="row"><!--inicio de row 1-->
        
        <div class="col-md-12"><!--inicio de col 2-->
        <div class="d1"><!--div 1-->
        <hr>
          <h1 class="text-center">Status</h1>
          <hr>
          </div><!--fin div 1-->
          <!--inicio de form integrante-->
          <div id="" class="">
              <form role="form" id="id_form_status" action="" method="POST">
                <div class="form-group">
                  <label for="status">Status:</label>
                  <input type="text" class="form-control" name="status" placeholder="Enter status">
                </div>
                <left><input type="submit" class="btn btn-primary" id="aceptar1" value="aceptar"></button><left>
              </form>
          </div>

          <div class="d2">
          <hr>

              <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
              <a class="ifancyboX" href="status.php" title="Formularios"><center><span class="glyphicon glyphicon-hand-up">Ayuda</span></center></a>
              </div>
          <hr>
          </div>
          <!--fin de form integrante-->
    </div>
  </div><!--Fin de row 1-->
  </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>