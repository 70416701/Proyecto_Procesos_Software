<?php include_once "./Vista/Recepcion/body.php";?>
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