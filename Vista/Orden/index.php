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
    <div class="card-header border-transparent">
      <h3 class="card-title">Seguimiento de ordenes</h3>

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
            <th>Número</th>
            <th>Producto</th>
            <th>Marca</th>
            <th>Descriónn</th>
            <th>Estado</th>
            <th>Técnico a cargo</th>
            <th>Acción</th>
          </tr>
          </thead>
          <tbody>
          <?php while (@$row = mysqli_fetch_array($datos)) {?>
          <tr>
            <td><?php echo @$row['numOrden'];?></td>
            <td></td>
            <td></td>
            <td><?php echo @$row['descTrab'];?></td>
            <td><span class="badge badge-success">Shipped</span></td>
            <td></td>
            <td>
              <div class="btn-group">
                 <a class="btn btn-info" href="<?php echo URL; ?>Orden/verOrdServVista/<?php echo $row['idOrden'];?>">Ver</a>
                 <a class="btn btn-warning" href="<?php echo URL; ?>Orden/editarOrdServVista/<?php echo $row['idOrden'];?>">Editar</a>
                 <a class="btn btn-danger" href="<?php echo URL; ?>Orden/eliminarOrdServVista/<?php echo $row['idOrden'];?>">Eliminar</a>
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