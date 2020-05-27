<?php include_once "./Vista/body.php";?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Orden de Servicio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editar Orden de Servico</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos del producto</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form  action="" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Técnico asignado</label>
                <select name="idTecnico" class="form-control select2" style="width: 100%;">
                  
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Producto</label>
                <input type="text" value="" name="tipo" class="form-control">
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
                <button type="submit" name="btnAgregarProducto" class="btn btn-primary">Guardar</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>