<?php include_once "./Vista/Produccion/body.php";?>
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
                <label for="inputName">Estado actual: <?php echo $datos['Estado'];?></label>
                <select name="Estado" class="form-control select2" style="width: 100%;">
                  <option value="En Proceso"><?php echo "En Proceso";?></option>
                  <option value="Terminado"><?php echo "Terminado";?></option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Producto</label>
                <input type="text" readonly="readonly" value="<?php echo $datos['tipo'];?>" name="tipo" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Marca</label>
                <input type="text" readonly="readonly" value="<?php echo $datos['marca'];?>" name="marca" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Modelo</label>
                <input type="text" readonly="readonly" value="<?php echo $datos['modelo'];?>" name="modelo" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Número de serie</label>
                <input type="text" readonly="readonly" value="<?php echo $datos['serie'];?>" name="serie" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del problema</label>
                <textarea name="descProb" readonly="readonly" class="form-control" rows="4"><?php echo $datos['descProb'];?></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del trabajo a realizar</label>
                <textarea name="descTrab" readonly="readonly" class="form-control" rows="4"><?php echo $datos['descTrab'];?></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del trabajo realizado</label>
                <textarea name="descSol" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Precio estimado</label>
                <input type="number" value="<?php echo $datos['precio'];?>" name="precio" class="form-control">
              </div>
              <div class="form-group">
                <input type="hidden" value="<?php echo $datos['idProducto']; ?>" name="idProducto">
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