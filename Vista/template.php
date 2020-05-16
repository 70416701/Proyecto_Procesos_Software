<?php 
namespace Vista;		
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
		<link rel="stylesheet" href="http://localhost:8080/soft_sertec/Vista/template/dist/css/adminlte.min.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>

		
	<body class="hold-transition sidebar-mini">
	<div class="wrapper">
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
	      </li>
	      <li class="nav-item d-none d-sm-inline-block">
	        <a href="#" class="nav-link">Home</a>
	      </li>
	      <li class="nav-item d-none d-sm-inline-block">
	        <a href="#" class="nav-link">Contact</a>
	      </li>
	    </ul>
	</nav>
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<a href="index3.html" class="brand-link">
		  <img src="http://localhost:8080/soft_sertec/Vista/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
		       style="opacity: .8">
		  <span class="brand-text font-weight-light">Admin SerTec</span>
		</a>
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
		  <div class="image">
		    <img src="http://localhost:8080/soft_sertec/Vista/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
		  </div>
		  <div class="info">
		    <a href="#" class="d-block">Miguel Torres</a>
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
		        	        <p>Registrar</p>
		        	      </a>
		        	    </li>
		        	    <li class="nav-item">
		        	      <a href="http://localhost:8080/soft_sertec/Orden/registrarOrdServVista" class="nav-link">
		        	        <i class="far fa-circle nav-icon"></i>
		        	        <p>Reporte</p>
		        	      </a>
		        	    </li>	            
		        	  </ul>
		        	</li>
				</ul>
			</nav>
	</aside>
<?php 
		}

		public function __destruct(){
?>
	  <footer class="main-footer">
	    <div class="float-right d-none d-sm-inline">
	      Anything you want
	    </div>
	    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
	  </footer>
	</div>
	<script src="http://localhost:8080/soft_sertec/Vista/template/plugins/jquery/jquery.min.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="http://localhost:8080/soft_sertec/Vista/template/dist/js/adminlte.min.js"></script>
	</body>
	</html>			
<?php
		}
	}
?>