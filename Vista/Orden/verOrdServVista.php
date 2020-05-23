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