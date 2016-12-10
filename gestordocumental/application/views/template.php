<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('public/img');?>/favicon.ico">

    <title><?= $title?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('public');?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?= base_url('public');?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('public');?>/css/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?= base_url('public');?>/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?= base_url('public');?>/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url('');?>">Gestor Documental</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?= base_url()?>index.php/inicio/">Inicio</a></li>
              <li><a href="<?= base_url()?>index.php/expediente/">Expediente</a></li>
              <li><a href="<?= base_url()?>index.php/gestion/">Gestion</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menú <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url()?>index.php/factura/">Factura</a></li>
                  <li><a href="<?= base_url()?>index.php/abono/">Abono</a></li>
                  <li><a href="<?= base_url()?>index.php/centro/">Centro</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="<?= base_url()?>index.php/proveedor/">Proveedor</a></li>
                  <li><a href="<?= base_url()?>index.php/pais/">Pais</a></li>
                </ul>
              </li>
            </ul>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    <div class="container">

      <div class="page-header">


      </div>

      <?php $this->load->view($vista);?>




    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url('public');?>/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?= base_url('public');?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= base_url('public');?>/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
