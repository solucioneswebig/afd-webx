

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
  <form method="post">
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
            <form>
  
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

     
          </div>

          <div class="col-md-12 text-center mb-5">
            <button type="submit" name="registrar" class="btn btn-success">Registrarse</button>
          </div>

        </div>
      </div>    
    </div>

    </form>
 </section>    
 
  <?php } ?>
 
