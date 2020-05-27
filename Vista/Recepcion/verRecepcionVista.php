<?php include_once "./Vista/Recepcion/body.php";?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ver Orden de Servicio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ver Orden de Servicio</li>
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
            <form  action="" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Número de orden: <?php echo $datos['numOrden'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName">Técnico asignado: <?php echo $datos['tecnombres'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName">Precio total estimado: <?php echo $datos['precioInicial'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName">Nombres: <?php echo $datos['nombres'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName">Apellidos: <?php echo $datos['apellidos'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName">DNI: <?php echo $datos['numOrden'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName">Dirección: <?php echo $datos['direccion'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName">Celular: <?php echo $datos['celular'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName">Email: <?php echo $datos['email'];?></label>
                  <input type="text" name="email" class="form-control">
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
            <form  action="" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Producto: </label>
              </div>
              <div class="form-group">
                <label for="inputName">Marca: </label>
              </div>
              <div class="form-group">
                <label for="inputName">Modelo: </label>
              </div>
              <div class="form-group">
                <label for="inputName">Número de serie: </label>
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del problema: </label>
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del trabajo a realizar: </label>
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Precio estimado: </label>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Atras</a>
        </div>
      </div>
    </section>
  </div>