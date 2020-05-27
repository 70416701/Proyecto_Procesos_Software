<?php include_once "./Vista/body.php";?>
<div class="content-wrapper">
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
    </div>
  </section>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Seguimiento de productos</h3>
      </div>
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