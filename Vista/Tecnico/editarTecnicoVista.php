<?php include_once "./Vista/body.php";?>
<div class="content-wrapper">
	<section class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1>Editar datos de Técnico</h1>
	      </div>
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="#">Home</a></li>
	          <li class="breadcrumb-item active">Editar Técnico</li>
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
		  <form  action="" method="POST" onsubmit="alert('Warning: datos actualizados del Técnico!')">
		    <div class="card-body">
		      <div class="form-group">
		        <label for="exampleInputEmail1">Nombres</label>
		        <input type="text" required pattern="^([A-Za-z ]){3,150}$" class="form-control" value="<?php echo $datos['nombres']; ?>" name="nombre">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Apellidos</label>
		        <input type="text" class="form-control" value="<?php echo $datos['apellidos']; ?>" name="apellido">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">DNI</label>
		        <input type="text" class="form-control" value="<?php echo $datos['dni']; ?>" name="dni">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Dirección</label>
		        <input type="text" class="form-control" value="<?php echo $datos['direccion']; ?>" name="direccion">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Celular</label>
		        <input type="text" class="form-control" value="<?php echo $datos['celular']; ?>" name="celular">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Email</label>
		        <input type="email" class="form-control" value="<?php echo $datos['email']; ?>" name="email">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputEmail1">Usuario</label>
		        <input type="text" class="form-control" value="<?php echo $datos['usuario']; ?>" name="usuario">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Contraseña</label>
		        <input type="password" class="form-control" name="contrasenia" placeholder="Password">
		      </div>
		      <div class="form-group">
		        <input type="hidden" value="<?php echo $datos['idTecnico']; ?>" name="idTecnico">
		      </div>
		    </div>
		    <!-- /.card-body -->

		    <div class="card-footer">
		      <button type="submit" class="btn btn-primary">Editar</button>
		    </div>
		  </form>
		</div>
	</div>
</div>