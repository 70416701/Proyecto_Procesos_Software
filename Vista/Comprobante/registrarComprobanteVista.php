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
          <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Cobros
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://localhost:8080/soft_sertec/Comprobante/registrarComprobanteVista" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Registro</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reporte</p>
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
	        <h1>Registrar Comprobante</h1>
	      </div>
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="#">Home</a></li>
	          <li class="breadcrumb-item active">Registrar Comprobante</li>
	        </ol>
	      </div>
	    </div>
	  </div><!-- /.container-fluid -->
	</section>
	<div class="col-md-6">
		<div class="card card-primary">
		  <div class="card-header">
		    <h3 class="card-title">Formulario</h3>
		  </div>
		  <!-- /.card-header -->
		  <!-- form start -->
		  <form  action="" method="POST">
		    <div class="card-body">
		   	  <div class="form-group">
		   	    <label for="exampleInputEmail1">Número de orden de Servicio</label>
		   	    <input type="text"  class="form-control" name="numOrden">
		   	  </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Detalle</label>
		        <input type="text" class="form-control" name="detalle">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Precio Total</label>
		        <input type="text" class="form-control" name="costoTotal">
		      </div>
		    <div class="card-footer">
		      <button type="submit" class="btn btn-info toastsDefaultInfo">Registrar</button>
		    </div>
		  </form>
		</div>
	</div>
</div>