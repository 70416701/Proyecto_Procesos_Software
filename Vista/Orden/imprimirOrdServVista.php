<?php
require_once("./Controladores/imprimir.php");
include_once "./Vista/body.php";
?>
  <!-- asdsadsadsadsadsadsadsadsadsadsads -->
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Emisión de orden de servicio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Emisión de orden de servicio</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
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
                  <b>Orden Nro:</b> <?php echo $numOrden;?><br>
                  <br>
                  <b>Técnico a cargo:</b> <?php echo $tecnombres." ".$tecapellidos;?><br>
                  <b></b><br>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
