  <!-- Sidebar Holder -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h3><img src="<?php echo $url; ?>vistas/assets/img/logo-webx-blanco.png" class="img-fluid" alt="Logo webx"></h3>
    </div>
    <h5 class="text-center">Programa de afiliados</h5>
    <ul class="list-unstyled components">
      <p class="text-center"><?php echo $obtener_datos_user["nombre_completo"]." ".$obtener_datos_user["apellido_paterno"]; ?></p>
      <li>
        <a href="<?php echo $url ?>inicio">Inicio</a>
      </li>

      <li class="active">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
          <li>
            <a href="#">Home 1</a>
          </li>
          <li>
            <a href="#">Home 2</a>
          </li>
          <li>
            <a href="#">Home 3</a>
          </li>
        </ul>
      </li>
      <li>

        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
          <li>
            <a href="#">Page 1</a>
          </li>
          <li>
            <a href="#">Page 2</a>
          </li>
        </ul>
      </li>
    </ul>


  </nav>