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
        </ul>
      </nav>
  </aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ordenes de servicio</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ordenes de servicio</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Seguimiento de productos</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Orden Nro.</th>
            <th>Producto</th>
            <th>Marca</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Técnico a cargo</th>
            <th>Acción</th>
          </tr>
          </thead>
          <tbody>
          <?php while (@$row = mysqli_fetch_array($datos)) {?>
          <tr>
            <td><?php echo @$row['numOrden'];?></td>
            <td><?php echo @$row['tipo'];?></td>
            <td><?php echo @$row['marca'];?></td>
            <td><?php echo @$row['descTrab'];?></td>
            <td><span class="badge badge-success"><?php echo @$row['Estado'];?></span></td>
            <td><?php echo @$row['nombres']." ".@$row['apellidos'];?></td>
            <td>
              <div class="btn-group">
                 <a class="btn btn-info" href="<?php echo URL; ?>Producto/verProductoVista/<?php echo $row['idProducto'];?>">Ver</a>
                 <a class="btn btn-warning" href="<?php echo URL; ?>Producto/editarProductoVista/<?php echo $row['idProducto'];?>">Editar</a>
                 <a class="btn btn-danger" href="<?php echo URL; ?>Producto/eliminarProductoVista/<?php echo $row['idProducto'];?>">Eliminar</a>
              </div> 
            </td>
          </tr>
          <?php }?>
          </tbody>
          <tfoot>
          <tr>
            <th>Orden Nro.</th>
            <th>Producto</th>
            <th>Marca</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Técnico a cargo</th>
            <th>Acción</th>
          </tr>
          </tfoot>
        </table>
      </div>
    </div>
</div>