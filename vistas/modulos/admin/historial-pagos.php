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

   <h2>Historial de Pagos</h2>
   <hr>

    </div>



  </div>
</div>

<?php 

}else{
  
  header("Location: ".$url."");
	
} 

?>