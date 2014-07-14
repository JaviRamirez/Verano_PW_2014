<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php');
  //include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

?>

    <div class="container"><!--inicio de container-->
             
              <h2 align="center">Integrante</h2>
              <hr>
              <div class="row"><!--inicio de row principal 1-->
              <!--Inicia form-->
                  <form role="form" id="id_form1" action="" method="POST">
                <div class="form-group">
                  <label for="nombre">nombre:</label>
                  <input type="textarea" class="form-control" name="nombre" placeholder="Enter nombre">
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
                          <label for="nombre4">Nombre:</label>
                        <select name="nombre4">
                        <option value="">Selecciona una opci&oacute;n</option>
                          <option value="barcelona">Barcelona</option>
                          <option value="real_madrid">Real Madrid</option>
                          <option value="milan">Milan</option>
                          <option value="chivas">Chivas</option>
                          <option value="celaya">Celaya</option>
                        </select>
                </div>
                <left><input type="submit" class="btn btn-primary" value="aceptar"></button><left>
            <!--fin de form-->
              </div><!--fin de row principal 1-->
              <hr>
              <div>
              <!--<img src="../img/foto1p.jpg" width="200" height="150" /></a>-->
             <a class="various iframe" href="https://www.google.com" title="Google"><center><img src="../images/gog.png"/></center></a>

              </div>
                   
    </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>