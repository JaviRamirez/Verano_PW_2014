<?php
  include ('../layouts/header.php');

?>
  
    <div class="container"><!--inicio de container-->
              <h2 class="text-center">Jugador</h2>
              <hr>
              <div class="row"><!--inicio de row principal 1-->
              <!--Inicia form-->
                  <form role="form" id="id_form9" action="" method="post">
                      <div class="form-group">
                        <label for="numero">Numero:</label>
                        <input type="text" class="form-control" name="numero" placeholder="Enter numero">
                      </div>
                      <div class="form-group">
                            <div class="form-group">
                                <label for="posicion">Posici&oacute;n:</label>
                              <select name="nombre">
                                <option value="">Selecciona un elemento</option>
                                <option value="portero">Portero</option>
                                <option value="defensa">Defensa</option>
                                <option value="medio">Medio</option>
                                <option value="delantero">Delantero</option>
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
              <a class="ifancybox" href="http://www.google.com"><center><img src="../images/gog.png" width="250" height="150" /></center></a>
              </div>
		               
    </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>