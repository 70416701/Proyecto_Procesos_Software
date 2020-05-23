<div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block"><span class="brand-text font-weight-light"> <?php echo $_SESSION['usuario'];?> </span></a>
        <a href="http://localhost:8080/soft_sertec/Login/logout" class="d-block"><span class="brand-text font-weight-light">Cerrar Sesión</span></a>
      </div>
    </div>
  <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Técnicos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8080/soft_sertec/Tecnico" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8080/soft_sertec/Tecnico/registrarTecnicoVista" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>             
            </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Ordenes de Servicio
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://localhost:8080/soft_sertec/Orden" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Seguimiento</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://localhost:8080/soft_sertec/Orden/registrarOrdServVista" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Registro</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Cobros
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://localhost:8080/soft_sertec/Comprobante/registrarComprobanteVista" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Registro</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reporte</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </aside>
  <!-- sdfsdfdsfdsfdsdsdsfdsfdsfdsfdsfdsfdsfdsfdsfdsf -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Comprobante</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"><?php echo $_SESSION['usuario'];?></a></li>
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