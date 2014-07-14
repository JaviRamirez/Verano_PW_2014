<?php
  include ('../layouts/header.php');

?>
  
    <div class="container"><!--inicio de container-->
              <h2 align="center">Tarjetas Jugador</h2>
              <hr>
              <div class="row"><!--inicio de row principal 1-->
              <!--Inicia form-->
                  <form role="form" action="" method="post">
                <div class="form-group">
                  <label for="minutotarjeta">Minuto Tarjeta:</label>
                  <input type="text" class="form-control" id="minutotarjeta" placeholder="Enter minuto tarjeta">
                </div>
                <div class="form-group">
                  <label for="tipotarjeta">Tipo Tarjeta:</label>
                  <input type="text" class="form-control" id="tipotarjeta" placeholder="Enter tipo tarjeta">
                </div>
                <!--<div class="form-group">
                  <label for="peso">Peso:</label>
                  <input type="text" class="form-control" id="peso" placeholder="Enter peso">
                </div>
                <div class="form-group">
                  <label for="estatura">Estatura:</label>
                  <input type="text" class="form-control" id="estatura" placeholder="Enter estatura">
                </div>
                <div class="form-group">
                  <label for="foto">Foto:</label>
                  <input type="file" id="foto">
                  <p class="help-block">Selecciona una imagen para agregar.</p>
                </div>
                <div class="form-group">
                  <label for="edad">Edad:</label>
                  <input type="text" class="form-control" id="edad" placeholder="Enter edad">
                </div>
                <div class="form-group">
                      
                          <label for="nombre4">Nombre:</label>
                        <select name="nombre4">
                          <option value="barcelona">Barcelona</option>
                          <option value="real_madrid">Real Madrid</option>
                          <option value="milan">Milan</option>
                          <option value="chivas">Chivas</option>
                          <option value="celaya">Celaya</option>
                        </select>
                      
                </div>-->
                
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