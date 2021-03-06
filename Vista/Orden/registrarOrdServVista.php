<?php include_once "./Vista/body.php";?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registrar Orden de Servicio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registrar Orden de Servico</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Orden de servicio</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form  action="" method="POST" onsubmit="alert('Orden de servicio y Cliente registrados exitosamente!')">
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Número de orden</label>
                  <input type="text" name="numOrden" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Técnico asignado</label>
                  <select name="idTecnico" class="form-control select2" style="width: 100%;">
                    <?php if (!$_POST) { while ($fila = mysqli_fetch_array($datos)) { ?>
                    <option value="<?php echo $fila['idTecnico'];?>"><?php echo $fila['nombres'];?></option>
                    <?php } }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputName">Precio total estimado</label>
                  <input type="number" step="0.01" min="1" max="5000" name="precioInicial" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Nombres</label>
                  <input type="text" required pattern="^([A-Za-z ]){3,45}$" name="nombre" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Apellidos</label>
                  <input type="text" name="apellido" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">DNI</label>
                  <input type="text" name="dni" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Dirección</label>
                  <input type="text" name="direccion" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Celular</label>
                  <input type="text" name="celular" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Email</label>
                  <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="btnRegistrarOrden" class="btn btn-secondary">Registrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos del producto</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form  action="" method="POST" onsubmit="alert('Producto registrado exitosamente!')">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Producto</label>
                <input type="text" required pattern="^([A-Za-z ]){3,45}$" name="tipo" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Marca</label>
                <input type="text" name="marca" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Modelo</label>
                <input type="text" name="modelo" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Número de serie</label>
                <input type="text" name="serie" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del problema</label>
                <textarea name="descProb" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del trabajo a realizar</label>
                <textarea name="descTrab" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Precio estimado</label>
                <input type="number" name="precio" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" name="btnAgregarProducto" class="btn btn-secondary">Agregar</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
       <div class="container-fluid">
           <div class="card card-secondary">
             <div class="card-header">
               <h3 class="card-title">Lista de productos</h3>
               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                   <i class="fas fa-minus"></i></button>
               </div>
             </div>
             <div class="card-body">
               <div class="form-group">
                 <div class="card-body p-0">
                   <div class="table-responsive">
                     <table class="table m-0">
                       <thead>
                       <tr>
                         <th>#</th>
                         <th>Producto</th>
                         <th>Marca</th>
                         <th>Modelo</th>
                         <th>S/N</th>
                         <th>Descripción</th>
                         <th>Acción</th>
                       </tr>
                       </thead>
                       <tbody>
                       <?php if (@$_POST) { $id = 0; while (@$row = mysqli_fetch_array(@$datos)) {?>
                       <tr>
                         <td>1<?php $id = @$row['idOrden'];?></td>
                         <td><?php echo @$row['tipo']; ?></td>
                         <td><?php echo @$row['marca']; ?></td>
                         <td><?php echo @$row['modelo']; ?></td>
                         <td><?php echo @$row['serie']; ?></td>
                         <td><?php echo @$row['descTrab']; ?></td>
                         <td>
                           <div class="btn-group">
                              <a class="btn btn-danger" href="">Eliminar</a>
                           </div>
                         </td>
                       </tr>
                       <?php } ?>
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>         
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <a class="btn btn-success float-right" href="<?php echo URL; ?>Orden/imprimirOrdServVista/<?php echo @$id;?>">Mostrar resultado</a><?php }?>
        </div>
      </div>
    </section>
  </div>