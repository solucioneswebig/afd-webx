<?php 

session_start();

include "modulos/header.php";


if(isset($_GET["slug"])){
  $rutas = explode("/", $_GET["slug"]);
  

  if($rutas[0]=="verificar"){
    include "modulos/formulario-mas-info.php";  
  }else if($rutas[0] == "registro"){
      include "modulos/formulario-registro-rapido.php";
  }else if($rutas[0] == "inicio"){
      include "modulos/login.php";
  }else if($rutas[0] == "dashboard"){
      
      if($rutas[1] == "inicio"){
        include "modulos/cuenta.php";  
      }else if($rutas[1] == "logaut"){
        unset($_SESSION['validarSession']);
        unset($_SESSION['id']);
        
        session_destroy();
        header("Location: ".$url."");
          
      }else{
        include "modulos/cuenta.php";  
      }
      
  }else{
      include "modulos/404.php";
  }

}else{
  include "modulos/login.php";
}


include "modulos/footer.php";