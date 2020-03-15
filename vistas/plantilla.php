<?php 

include "modulos/includes/header.php";


if(isset($_GET["slug"])){
  $rutas = explode("/", $_GET["slug"]);
  

  if($rutas[0]=="verificar"){
    include "modulos/formulario-mas-info.php";  
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

