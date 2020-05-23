<?php $tecnicos = $tecnicos->listar_tecnicos();?>
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
                <label for="inputName">Técnico asignado actual: <?php echo $datos['nombres'];?></label>
                <select name="idTecnico" class="form-control select2" style="width: 100%;">
                  <?php while ( $row = mysqli_fetch_array($tecnicos)) {?>
                  <option value=""><?php echo $row['nombres'];?></option>
                  <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Producto</label>
                <input type="text" required pattern="^([A-Za-z ]){3,150}$" value="<?php echo $datos['tipo'];?>" name="tipo" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Marca</label>
                <input type="text" value="<?php echo $datos['marca'];?>" name="marca" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Modelo</label>
                <input type="text" value="<?php echo $datos['modelo'];?>" name="modelo" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Número de serie</label>
                <input type="text" value="<?php echo $datos['serie'];?>" name="serie" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del problema</label>
                <textarea name="descProb" class="form-control" rows="4"><?php echo $datos['descProb'];?></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del trabajo a realizar</label>
                <textarea name="descTrab" class="form-control" rows="4"><?php echo $datos['descTrab'];?></textarea>
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