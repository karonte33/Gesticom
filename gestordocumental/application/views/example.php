<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
  <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('public');?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('public');?>/css/navbar.css" rel="stylesheet">
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
    <script src="<?= base_url('public');?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= base_url('public');?>/js/ie10-viewport-bug-workaround.js"></script>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
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

	<div style='height:20px;'></div>
    <div>
		<?php echo $output; ?>
    </div>

</body>
</html>
