<?php namespace Vista;
$template = new Template();
		
class Template{
	public function __construct(){
	
?>
<!DOCTYPE html>	
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Aplicación web - Servicio técnico</title>
		<link rel="stylesheet" href="http://localhost:8080/soft_sertec/Vista/template/plugins/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="http://localhost:8080/soft_sertec/Vista/template/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
		<link rel="stylesheet" href="http://localhost:8080/soft_sertec/Vista/template/dist/css/adminlte.min.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>	
	<body class="hold-transition sidebar-mini">
	<div class="wrapper">
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<ul class="navbar-nav">
	      <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></a></i>  
	    </ul>
	</nav>
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<a href="#" class="brand-link">
		  <img src="http://localhost:8080/soft_sertec/Vista/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
		       style="opacity: .8">
		  <span class="brand-text font-weight-light">Admin SerTec</span>
		</a>			
<?php 
		}
		public function __destruct(){
?>
	</div>
	<script src="http://localhost:8080/soft_sertec/Vista/template/plugins/sweetalert2/sweetalert2.min.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/plugins/jquery/jquery.min.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/dist/js/adminlte.min.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/plugins/jquery/jquery.min.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/plugins/datatables/jquery.dataTables.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/dist/js/adminlte.min.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/dist/js/demo.js"></script>
	<script>
	  $(function () {
	    $("#example1").DataTable();
	    $('#example2').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false,
	    });
	    const Toast = Swal.mixin({
	      toast: true,
	      position: 'top-end',
	      showConfirmButton: false,
	      timer: 3000
	    });
	    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info', 
        title: 'Resgistro exitoso',
        subtitle: 'Comprobante de venta',
        body: 'Se ha registrado exitosamente el comprobante.'
      })
    });
	  });

	</script>
	</body>
	</html>			
<?php
		}
	}
?>