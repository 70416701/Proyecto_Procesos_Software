<div class="content-wrapper">
	<section class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1>Técnico</h1>
	      </div>
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="#">Home</a></li>
	          <li class="breadcrumb-item active">Registrar Técnico</li>
	        </ol>
	      </div>
	    </div>
	  </div><!-- /.container-fluid -->
	</section>
	<div class="col-md-6">
		<div class="card card-primary">
		  <div class="card-header">
		    <h3 class="card-title">Perfil del Técnico</h3>
		  </div>
		  <!-- /.card-header -->
		  <!-- form start -->
		  <form  action="" method="POST">
		    <div class="card-body">
		      <div class="form-group">
		        <label for="exampleInputEmail1">Nombres: <?php echo $datos['nombres'];?></label>
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Apellidos <?php echo $datos['apellidos'];?></label>
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">DNI: <?php echo $datos['dni'];?></label>
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Dirección: <?php echo $datos['direccion'];?></label>
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Celular: <?php echo $datos['celular'];?></label>
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Email: <?php echo $datos['email'];?></label>
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Usuario: <?php echo $datos['usuario'];?></label>
		      </div>
		      <div class="form-group">
		      </div>
		    </div>
		    <!-- /.card-body -->

		    <div class="card-footer">
		      <a href="#" class="btn btn-secondary">Retornar</a>
		    </div>
		  </form>
		</div>
	</div>
</div>