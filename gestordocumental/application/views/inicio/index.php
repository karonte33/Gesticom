
<div  class="col-md-5 panel panel-info">
  <?php foreach ($filtro->result() as $row)
  {

          echo "<div class='panel-heading'>Lista de Gestiones en Curso</div>";
          echo "<br>";
          echo"<span class='glyphicon glyphicon-pushpin' aria-hidden='true'>". $row->denominacion."</span>";
  }
  ?>
</div>
<div class="col-md-2"></div>
<div  class="col-md-5 panel panel-warning">
  <?php foreach ($expe->result() as $d)
  {

          
          echo "<div class='panel-heading'>Lista de Expedientes en Curso</div>";
          echo "<br>";
          echo "<span class='glyphicon glyphicon-pushpin' aria-hidden='true'>". $d->descripcion."</span>";
  }
  ?>
</div>
