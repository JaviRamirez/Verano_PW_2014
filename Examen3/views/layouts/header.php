<?php 
  define('BASEURL','http://localhost/Verano_PW_2014/Examen3');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase programación web verano</title>

    <!-- Bootstrap -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../source/jquery.fancybox.css" type="text/css" media="screen"/>
    <link rel="icon" href="../favicon.ico">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-datetimepicker.css" />
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/mycss.css" rel="stylesheet">
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">REVISTA ITC <span class="glyphicon glyphicon-list-alt"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Inicio</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-thumbs-up"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-phone"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-wrench"></span></a></li>
            <!--Lista de forms de barra-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones Forms <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class=""><a href="<?php echo BASEURL; ?>/views/opcionesForms/status.php">Status Forms</a></li>
                <li class="divider"></li>
                <li class=""><a href="<?php echo BASEURL; ?>/views/opcionesForms/autor.php">Autor Forms</a></li>
                <li class="divider"></li>
                <li class=""><a href="<?php echo BASEURL; ?>/views/opcionesForms/revista.php">Revista Forms</a></li>
                <li class="divider"></li>
                <li class=""><a href="<?php echo BASEURL; ?>/views/opcionesForms/articulo.php">Articulo Forms</a></li>
              </ul>
            </li>
             <!--fin de Lista de forms de barra-->
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
          </ul>      
          <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-print"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-comment"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-globe"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">General <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Quienes somos</a></li>
            <li><a href="#">Ubicacion</a></li>
            <li><a href="#">Historia</a></li>
            <li class="divider"></li>
            <li><a href="#">Otras secciones</a></li>
          </ul>
        </li>
      </ul>
      <!--form de buscar-->
          <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
          <!--fin form de buscar-->

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

