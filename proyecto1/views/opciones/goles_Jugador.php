<?php
  include ('../layouts/header.php');

?>
  
    <div class="container"><!--inicio de container-->
              <h2 align="center">Goles Jugador</h2>
              <hr>
              <div class="row"><!--inicio de row principal 1-->
              <!--Inicia form-->
              <form role="form" action="" method="post">
                <div class="form-group">
                  <label for="minutogol">Minuto Gol:</label>
                  <input type="text" class="form-control" id="minutogol" placeholder="Enter minuto gol">
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