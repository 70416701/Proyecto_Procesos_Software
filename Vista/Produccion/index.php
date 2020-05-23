<div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block"><span class="brand-text font-weight-light"> <?php echo $_SESSION['usuario'];?> </span></a>
        <a href="http://localhost:8080/soft_sertec/Login/logout" class="d-block"><span class="brand-text font-weight-light">Cerrar Sesión</span></a>
      </div>
    </div>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                <a href="http://localhost:8080/soft_sertec/Produccion" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seguimiento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8080/soft_sertec/Orden/registrarOrdServVista" class="nav-link">
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
    <div class="card-header border-transparent">
      <h3 class="card-title">Seguimiento de productos</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table m-0">
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
                 <a class="btn btn-info" href="<?php echo URL; ?>Produccion/verProduccionVista/<?php echo $row['idProducto'];?>">Ver</a>
                 <a class="btn btn-warning" href="<?php echo URL; ?>Produccion/editarProduccionVista/<?php echo $row['idProducto'];?>">Editar</a>
              </div> 
            </td>
          </tr>
          <?php }?>
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
      <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
    </div>
    <!-- /.card-footer -->
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