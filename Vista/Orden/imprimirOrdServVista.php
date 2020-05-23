<?php
require_once("./Controladores/imprimir.php");
?>
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
  <!-- asdsadsadsadsadsadsadsadsadsadsads -->
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Orden de servicio.
                    <small class="float-right">Fecha: <?php echo $fecha;?></small>
                  </h4>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Empresa
                  <address>
                    <strong>Servicio Tecnico S.R.L.</strong><br>
                    Av. Giráldez 274 int. S-17, Huancayo<br>
                    Celular: 935378911<br>
                    Email: info@serviciotecnicosrl.com
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  Cliente
                  <address>
                    <strong><?php echo $nombres." ".$apellidos;?></strong><br>
                    <?php echo $direccion;?><br>
                    Celular: <?php echo $celular;?><br>
                    Email: <?php echo $email;?>
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Orden Nro:</b> <?php echo $numOrden;?><br>
                  <b>Técnico a cargo:</b> <?php echo $tecnombres." ".$tecapellidos;?><br>
                </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Cant.</th>
                      <th>Producto</th>
                      <th>Serie Nro.</th>
                      <th>Descripción</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php for ($x=0; $x < $i; $x++) { ?> 
                    <tr>
                      <td>1</td>
                      <td><?php echo $array["tipo".$x];?></td>
                      <td><?php echo $array["serie".$x];?></td>
                      <td><?php echo $array["descProb".$x];?></td>
                      <td>s/.<?php echo $array["precio".$x];?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <!-- <p class="lead">Payment Methods:</p> 
                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">-->
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Sirvase a revisar toda la información brindada e impresa en éste documento, de estar de acuerdo 
                    en la posteridad no podrá hacer algún reclamo.<br>
                    Si el equipo o producto permanece más de 30 días después de terminado el trabajo o servicio, se quedará
                    en almacén, si solicita su devolución tendrá que pagar 5% del valor del producto por día almacenado.
                  </p>
                </div>
                <div class="col-6">
                  
                  <div class="table-responsive">
                    <table class="table">
                      <!-- <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                      </tr>
                      <tr> -->
                        <th>Total:</th>
                        <td>s/.<?php echo $precioInicial;?></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
