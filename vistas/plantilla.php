<?php 
ob_start(); 
include "modulos/includes/header.php";


if(isset($_GET["slug"])){
  $rutas = explode("/", $_GET["slug"]);
  

  if($rutas[0]=="verificar"){
    include "modulos/formulario-mas-info.php";  
    include "modulos/includes/footer.php";
  }else if($rutas[0] == "recuperar-password"){ 
  
    include "modulos/formulario-recuperar.php";
    include "modulos/includes/footer.php";
  
  }else if($rutas[0] == "registro"){

      include "modulos/formulario-registro-rapido.php";
      include "modulos/includes/footer.php";

  }else if($rutas[0] == "inicio"){

      include "modulos/login.php";
      include "modulos/includes/footer.php";

  }else if($rutas[0] == "dashboard"){
      
      if(isset($rutas[1]) && $rutas[1] == "inicio"){

        include "modulos/admin/cuenta.php"; 

      }else if(isset($rutas[1]) && $rutas[1] == "ventas"){

        include "modulos/admin/ventas.php"; 

      }else if(isset($rutas[1]) && $rutas[1] == "marketing"){

        include "modulos/admin/marketing.php"; 

      }else if(isset($rutas[1]) && $rutas[1] == "historial-pagos"){

        include "modulos/admin/historial-pagos.php";

      }else if(isset($rutas[1]) && $rutas[1] == "estadisticas"){

        include "modulos/admin/estadisticas.php"; 

      }else if(isset($rutas[1]) && $rutas[1] == "logaut"){

        unset($_SESSION['validarSession']);
        unset($_SESSION['id']);
        
        session_destroy();

        header("Location: ".$url."");
          
      }else{
        include "modulos/admin/cuenta.php";  
      }
      
  }else{
      include "modulos/includes/404.php";
      include "modulos/includes/footer.php";
  }

}else{
  include "modulos/login.php";
  include "modulos/includes/footer.php";
}


ob_end_flush();

