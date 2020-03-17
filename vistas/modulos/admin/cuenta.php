<?php
if ($_SESSION["validarSession"] == "ok") {
include "includes/head.php";
?>
<div class="wrapper">
  <?php include "includes/menu-side.php"; ?>

  <!-- Page Content Holder -->
  <div id="content">

    <?php include "includes/menu-top.php"; ?>

    <div class="content-wrapper">


      <div class="row mb-4">

          <div class="col-md-3">
              <div class="card">
              <div class="card-body gradiente">
                <div class="text-white text-center">0</div>
              </div>
              <div class="card-footer text-center text-white bg-dark text-white card-black">Transacciones totales</div>
            </div>
          </div>

          <div class="col-md-3">
              <div class="card"> 
              <div class="card-body gradiente">
                <div class="text-white text-center">$0.00 USD</div>
              </div>
              <div class="card-footer text-center text-white bg-dark text-white card-black">Ganancias actuales</div>
            </div>
          </div>

          <div class="col-md-3">
              <div class="card">
                <div class="card-body gradiente">
                 <div class="text-white text-center">$0.00% USD</div>
                </div>
                <div class="card-footer text-center text-white bg-dark text-white card-black">Ingreso totales a la fecha</div>
            </div>
          </div>

          <div class="col-md-3">
              <div class="card">
              <div class="card-body gradiente">
                <div class="row">
                <div class="col-md-6">
                     <div class="text-white text-left">2</div>
                </div>
                <div class="col-md-6">
                     <div class="text-white text-right">0.000%</div>
                </div>
                </div>
              </div>
              <div class="card-footer text-center text-white bg-dark text-white fuente-letra">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="text-white card-black">Visitantes únicos</div>
                      </div>
                      <div class="col-md-6">
                          <div class="text-white card-black">Índice de ventas</div>
                      </div>
                  </div>
              </div>
            </div>
          </div>

      </div>


        <div class="row mb-4">
          <div class="col-md-6">
              <div class="card">
                  <h5 class="card-header color-header text-white fuente-letra">Requisitos para el siguiente pago: 0.00% Completo</h5>
                  <div class="card-body alto-caja">
                    <div class="progress mt-3 mt-2">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="pt-4 fuente-letra">has ganado $o.oo USD del $90.00 USD requisito</p>
                </div>
                </div>
          </div>
          <div class="col-md-6">
              <div class="card">
                  <h5 class="card-header color-header text-white fuente-letra">Enlace estándar para México</h5>
                  <div class="card-body alto-caja">
                    <p fuente-letra>Enlaces para Colombiay Chile dispojnible en el menu</p>
                    <div class="input-group">
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                </div>
          </div>
      </div>


        <div class="row mb-4">
          <div class="col-md-12">
              <div class="card">
              <h5 class="card-header color-header text-white fuente-letra">Featured</h5>
              <div class="card-body">
                <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td fuente-letra>Forma de conmisión actual</td>
                              <td fuente-letra>Variable</td>
                            </tr>
                            <tr>
                              <td fuente-letra>Pago por nivel actual</td>
                              <td fuente-letra>Nivel 1: $45.oo USD $100.00 USD por cada indicación aprobada</td>
                            </tr>
                        </tbody>
              </div>
            </div>
          </div>
      </div>


    </div>



  </div>
</div>

<?php 

}else{
  
  header("Location: ".$url."");
	
} 

?>