<?php include_once "./Vista/body.php";?>
  <!-- sdfsdfdsfdsfdsdsdsfdsfdsfdsfdsfdsfdsfdsfdsfdsf -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Técnicos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Técnicos</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>                  
        <tr>
          <th style="width: 10px">DNI</th>
          <th>Nombre completo</th>
          <th>Dirección</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
      	<?php while (@$row = mysqli_fetch_array($datos)) {?>
        <tr>
          <td><?php echo $row['dni'];?></td>
          <td><?php echo $row['nombres'] . " " . $row['apellidos'] ;?></td>
          <td><?php echo $row['direccion'];?></td>
          <td>
 			    <div class="btn-group">
 				       <a class="btn btn-info" href="<?php echo URL; ?>Tecnico/verTecnicoVista/<?php echo $row['idTecnico'];?>">Ver</a>
               <a class="btn btn-warning" href="<?php echo URL; ?>Tecnico/editarTecnicoVista/<?php echo $row['idTecnico'];?>">Editar</a>
               <a class="btn btn-danger" href="<?php echo URL; ?>Tecnico/eliminarTecnicoVista/<?php echo $row['idTecnico'];?>">Eliminar</a>
          </div>
         </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer clearfix">
    <ul class="pagination pagination-sm m-0 float-right">
      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
    </ul>
  </div>
</div>