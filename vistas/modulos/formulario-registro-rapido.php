<?php if(isset($_SESSION["registrado"])){ ?>
<section class="verificar">
<div class="container">
  <div class="row">
    <div class="col-md-12 verificar ">
    <h3>Has click a continuación para confirmar su dirección de correo electrónico</h3>
      <?php 
        if(isset($_SESSION["link"])){
          echo $_SESSION["link"]; 
        }
      ?>

      <p>Si recibió este correo electrónico por error, elimínelo. No se le suscribirá si no hace clic en el vínculo de confirmación de arriba</p>
    </div>
  </div>
</div> 

</section> 
<?php }else{ ?>

 <section id="vista1" class="d-block">
  <form method="post" id="formulario_registro_rapido">
    <div class="recuadro">
      <div class="container bg-white">
        <div class="row">
          <div class="col-md-12 py-4">
            <div class="bg-gris py-2 pl-2">
              <h2 class="text-gris text-center text-md-left">Registro del afiliado</h2>
            </div>
            <p class="text-justify text-md-left">Completa los siguientes datos para inscribirte en el programa de afiliados hostgator</p>  
          </div>
  
          <div class="col-md-12">
            <div class="cuadro mb-4 text-center text-md-left"><h5 class="ml-md-4">Crear tu cuenta</h5></div>
        
  
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="nombreUsuario">Nombre de usuario <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="nombreUsuario" name="nombre_usuario" required>
              </div>
            </div>
  
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="clave">Contraseña <span>*</span> </label>
              <div class="col-md-6">
                <input type="password" class="form-control" id="clave" name="password1 required">
              </div>
            </div>
  
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="claveValida">Vuelve a ingresar la contraseña <span>*</span> </label>
              <div class="col-md-6">
                <input type="password" class="form-control" id="claveValida" name="password" required>
              </div>
            </div>

          </div>

          <div class="col-md-12">
            <div class="cuadro mb-4 text-center text-md-left"><h5 class="ml-md-4">Información personal</h5></div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="nombre">Nombre Completo<span>*</span> </label>
  
              <div class="col-md-6">
                <input type="text" class="form-control " id="nombre" name="nombre_completo" required>
              </div>
  
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="apellido">Apellido Paterno<span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="apellido" name="apellido_paterno" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="apellidoM">Apellido Materno<span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="apellidoM" name="apellido_materno" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="direccion">Dirección<span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="direccion" name="direccion" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="colonia">Colonia<span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="colonia" name="colonia" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="municipio">Municipio <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="municipio" name="municipio" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="estado">Estado <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="estado" name="estado" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="postal">Código postal <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="postal" name="codigo_postal" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="telefono">Número de teléfono <span>*</span> </label>
              <div class="col-md-6">
                <input type="number" class="form-control" id="telefono" name="telefono">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="email">Email <span>*</span> </label>
              <div class="col-md-6">
                <input type="email" name="email" class="form-control" name="email" required>
              </div>
            </div>

          </div>

          <div class="col-md-12 text-center mb-5">
            <button type="button" name="guardar_nuevo_registro" class="btn btn-success" id="enviar_registro_rapido">Registrarse</button>
          </div>

        </div>
      </div>    
    </div>

    </form>
 </section>    
 
  <?php } ?>
 
